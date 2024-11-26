<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Service;
use App\Models\ServiceImage;

class ProductServiceController extends Controller
{
    public function show($type, $id)
    {
        if ($type === 'product') {
            $product = Product::with(['images' => function ($query) {
                $query->orderBy('id'); // Atau orderBy('created_at') jika ingin berdasarkan tanggal
            }])->findOrFail($id); // Ubah $item menjadi $product
            // dd($product->images);
            return view('jasa.post_produk', compact('product'));
        } elseif ($type === 'service') {
            $service = Service::with(['images' => function ($query) {
                $query->orderBy('id');
            }])->findOrFail($id);
            return view('jasa.post_jasa', compact('service'));
        }

        abort(404); // Jika tipe tidak valid
    }
}
