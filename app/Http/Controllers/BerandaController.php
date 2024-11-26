<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;
use App\Models\Balance;
use App\Models\Product;
use App\Models\Service;

class BerandaController extends Controller
{

    public static function middleware(): array
    {
        return [
            new Middleware('permission:view dashboard', only: ['index']),
        ];
    }
    public function index()
    {
        $user = Auth::user();
        $balance = Balance::where('user_id', $user->id)->first();

        $products = Product::all();
        $services = Service::all();

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

        $allItems = $products->merge($services)->shuffle();

        return view('dashboard.dashboard_user', [
            'title' => 'dashboard_user',
            'balance' => $balance,
        ], compact('allItems'));
    }

    public function jasa()
    {
        return view('dashboard.jasa', [
            'title' => 'Jasa',
        ]);
    }
    public function pekerjaan()
    {
        return view('pekerjaan.pekerjaan', [
            'title' => 'Pekerjaan',
        ]);
    }
}
