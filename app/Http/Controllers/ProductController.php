<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImg;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::with('images')->get(); // Eager load images

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('img', function ($row) {
                    $images = $row->images; // Get associated images
                    $imageHtml = '';

                    foreach ($images as $image) {
                        $imageHtml .= '<img src="' . asset('images/products/' . $image->image) . '" width="50" height="50" class="img-thumbnail" style="margin: 2px;" />';
                    }

                    return $imageHtml; // Return the HTML for images
                })
                ->addColumn('action', function ($row) {
                    $btn = '<div class="d-flex justify-content-around">';
                    if ($row->status == 'pending') {
                        $btn .= '<button class="btn btn-outline-success btn-sm me-2 verify-btn" data-id="' . $row->id . '">
                            <i class="fas fa-check"></i> Verifikasi
                          </button>';
                    }
                    $btn .= '<button class="btn btn-outline-danger btn-sm delete-btn" data-id="' . $row->id . '">
                        <i class="fas fa-trash"></i> Hapus
                      </button>';
                    $btn .= '</div>';
                    return $btn;
                })
                ->make(true);
        }

        return view('admin_page.product.index');
    }

    public function verify($id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->status = 'verif';
            $product->save();
            return response()->json(['success' => 'Status updated to verified']);
        }
        return response()->json(['error' => 'Product not found'], 404);
    }

    public function create()
    {
        return view('admin_page.product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'seller_id' => 'required|string',
            'product_name' => 'required|string',
            'product_stock' => 'required|integer',
            'price' => 'required|integer',
            'detail_product' => 'nullable|string',
            'category_product' => 'nullable|string',
            'brand' => 'nullable|string',
            'dangerous_product' => 'required|string',
            'expired_date' => 'nullable|date',
            'product_condision' => 'required|string',
            'pre_order' => 'nullable|string',
            'pre_order_day' => 'nullable|integer',
            'shipping_cost' => 'nullable|integer',
            'status' => 'nullable|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate images
        ]);

        // Generate SKU
        $productNameSlug = Str::slug($request->product_name); // Create a slug from the product name
        $sku = $this->generateUniqueSku($productNameSlug);

        // Create the product with the generated SKU
        $product = Product::create(array_merge($request->except('images'), ['sku' => $sku]));

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images/products'), $imageName); // Save image to public/images/products
                ProductImg::create([
                    'product_id' => $product->id, // Ensure product_id is set correctly
                    'image' => $imageName,
                ]);
            }
        }

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    private function generateUniqueSku($productNameSlug)
    {
        do {
            $randomPart1 = Str::random(5); // Generate 5 random characters
            $randomPart2 = Str::random(5); // Generate another 5 random characters
            $sku = "{$productNameSlug}-{$randomPart1}-{$randomPart2}"; // Combine to form SKU
        } while (Product::where('sku', $sku)->exists()); // Check for uniqueness

        return $sku;
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->delete();
            return response()->json(['success' => 'Product deleted successfully']);
        }
        return response()->json(['error' => 'Product not found'], 404);
    }
}
