<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Service;
use App\Models\ServiceImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\StoreServiceRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Auth\Events\Validated;

class MyShopController extends Controller
{
    public function showServicesProducts()
    {
        $userId = Auth::id();

        $products = Product::where('seller_id', $userId)->get();

        $services = Service::where('seller_id', $userId)->get();

        foreach ($products as $product) {
            $firstImage = $product->images()->orderBy('id', 'asc')->first();

            if ($firstImage) {
                $imagePath = $firstImage->image;

                if (filter_var($imagePath, FILTER_VALIDATE_URL)) {
                    $product->image_to_show = $imagePath;
                } else {
                    $product->image_to_show = asset('storage/product_images/' . $imagePath);
                }
            } else {
                $product->image_to_show = 'path/to/default-image.jpg';
            }
        }

        foreach ($services as $service) {
            $firstImage = $service->images()->orderBy('id', 'asc')->first();

            if ($firstImage) {
                $imagePath = $firstImage->image;

                if (filter_var($imagePath, FILTER_VALIDATE_URL)) {
                    $service->image_to_show = $imagePath;
                } else {
                    $service->image_to_show = asset('storage/service_images/' . $imagePath);
                }
            } else {
                $service->image_to_show = 'path/to/default-image.jpg';
            }
        }

        return view('setting.myshop.products_services', [
            'products' => $products,
            'services' => $services
        ]);
    }

    public function addProduct()
    {
        return view('setting.myshop.add_products',);
    }

    public function storeProduct(Request $request)
    {
        // dd($request->all());
        // $request->validate([
        //     'name_product' => 'required|max:255',
        //     'detail_product' => 'required|max:3000',
        //     'stock_product' => 'required|integer',
        //     'price' => 'required|integer',
        //     'image' => 'required|array',
        //     'image.*' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        //     'category_product' => 'nullable|max:30',
        //     'brand' => 'nullable|max:100',
        //     'dangerous_product' => 'nullable|max:6',
        //     'expired_date' => 'nullable|date',
        //     'product_condision' => 'nullable|max:50',
        //     'pre_order_day' => 'nullable|integer',
        //     'shipping_cost' => 'nullable|integer|min:0',
        // ]);

        // Membuat SKU unik
        $sku = Str::slug($request->input('name_product')) . '-' . Str::random(5) . '-' . Str::random(5);

        // Menyimpan data produk baru
        $product = new Product();
        $product->seller_id = Auth::id();
        $product->name_product = $request->input('name_product');
        $product->sku = $sku;
        $product->status = 'pending';
        $product->stock_product = $request->input('stock_product');
        $product->price = $request->input('price');
        $product->detail_product = $request->input('detail_product');
        $product->category_product = $request->input('category_product');
        $product->brand = $request->input('brand');
        $product->dangerous_product = $request->input('dangerous_product');
        $product->expired_date = $request->input('expired_date');
        $product->product_condision = $request->input('product_condision');
        $product->pre_order_day = $request->input('pre_order_day');
        $product->shipping_cost = $request->input('shipping_cost') ?: null;
        $product->save();

        // Menyimpan gambar produk
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $imagePath = $image->store('product_images', 'public');
                $imageName = basename($imagePath);

                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $imageName,
                ]);
            }
        }

        // Redirect dengan pesan sukses
        return redirect()->route('products_services')->with('success', 'Produk berhasil ditambahkan');
    }

    public function editProduct($id)
    {
        $products = Product::with('images')->findOrFail($id);
        return view('setting.myshop.change_products', compact('products'));
    }


    public function updateProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        // dd($request->all());
        // Validasi input (opsional, sesuai kebutuhan)
        $request->validate([
            'name_product' => 'required|max:255',
            'detail_product' => 'required',
            'stock_product' => 'required|integer',
            'price' => 'required|integer',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // Update data produk
        $product->name_product = $request->name_product;
        $product->detail_product = $request->detail_product;
        $product->stock_product = $request->stock_product;
        $product->price = $request->price;
        $product->category_product = $request->category_product;
        $product->brand = $request->brand;
        $product->dangerous_product = $request->dangerous_product;
        $product->expired_date = $request->expired_date;
        $product->product_condision = $request->product_condision;
        $product->pre_order_day = $request->pre_order_day;
        $product->shipping_cost = $request->shipping_cost;

        // Update gambar
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $index => $file) {
                // Cek apakah index gambar ada pada gambar yang sudah ada
                if ($product->images->has($index)) {
                    // Ganti gambar yang sudah ada
                    $oldImage = $product->images[$index];
                    $oldImagePath = 'storage/product_images/' . $oldImage->image;

                    // Hapus file gambar lama
                    if (file_exists(public_path($oldImagePath))) {
                        unlink(public_path($oldImagePath));
                    }

                    // Simpan gambar baru
                    $path = $file->store('product_images', 'public');
                    $oldImage->update(['image' => basename($path)]);
                } else {
                    // Tambahkan gambar baru
                    $path = $file->store('product_images', 'public');
                    $product->images()->create(['image' => basename($path)]);
                }
            }
        }

        $product->save();

        return redirect()->route('products_services')->with('success', 'Produk berhasil diubah!');
    }

    public function addService($id)
    {
        return view('setting.myshop.add_services', compact('service'));
    }

    public function storeService(Request $request)
    {
        // Check if seller status is 'verif'
        $seller = \App\Models\Seller::where('user_id', Auth::id())->first();
        if (!$seller || $seller->status !== 'verif') {
            return redirect()->route('products_services')->with('error', 'Only sellers with status "verif" can add services.');
        }

        // Validate request
        $request->validate([
            'service_name' => 'required|max:255',
            'detail_service' => 'nullable|max:3000',
            'service_time' => 'nullable|integer',
            'price' => 'required|integer',
            'image' => 'required|array',
            'image.*' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'category_service' => 'nullable|max:30',
            'brand' => 'nullable|max:100',
            'status' => 'nullable|max:20',
        ]);

        // Generate unique SKU
        $sku = Str::slug($request->input('service_name')) . '-' . Str::random(10);

        // Create a new service
        $service = new Service();
        $service->seller_id = Auth::id();
        $service->service_name = $request->input('service_name');
        $service->sku = $sku;
        $service->status = $request->input('status', 'pending');
        $service->service_time = $request->input('service_time');
        $service->price = $request->input('price');
        $service->detail_service = $request->input('detail_service');
        $service->category_service = $request->input('category_service');
        $service->brand = $request->input('brand');
        $service->save();

        // Save service images
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $imagePath = $image->store('service_images', 'public');
                $imageName = basename($imagePath);

                // Save image to the database
                ServiceImage::create([
                    'service_id' => $service->id,
                    'image' => $imageName,
                ]);
            }
        }

        return redirect()->route('products_services')->with('success', 'Service added successfully.');
    }

    public function editService($id)
    {
        $service = Service::with('images')->findOrFail($id); // Ambil semua gambar terkait produk
        return view('setting.myshop.change_services', compact('service'));
    }

    public function updateService(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        // Validate input
        $request->validate([
            'service_name' => 'required|max:255',
            'detail_service' => 'nullable|max:3000',
            'service_time' => 'nullable|integer',
            'price' => 'required|integer',
            'image.*' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'category_service' => 'nullable|max:30',
            'brand' => 'nullable|max:100',
            'status' => 'nullable|max:20',
        ]);

        // Update service data
        $service->service_name = $request->service_name;
        $service->detail_service = $request->detail_service;
        $service->service_time = $request->service_time;
        $service->price = $request->price;
        $service->category_service = $request->category_service;
        $service->brand = $request->brand;
        $service->status = $request->status ?? $service->status;
        $service->save();

        // Update images if new images are uploaded
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $index => $file) {
                // Check if the image already exists
                if ($service->images->has($index)) {
                    // Replace the existing image
                    $oldImage = $service->images[$index];
                    $oldImagePath = 'storage/service_images/' . $oldImage->image;

                    // Delete old image
                    if (file_exists(public_path($oldImagePath))) {
                        unlink(public_path($oldImagePath));
                    }

                    // Save new image
                    $path = $file->store('service_images', 'public');
                    $oldImage->update(['image' => basename($path)]);
                } else {
                    // Add new image if not exists
                    $path = $file->store('service_images', 'public');
                    $service->images()->create(['image' => basename($path)]);
                }
            }
        }

        return redirect()->route('products_services')->with('success', 'Service successfully updated');
    }
}
