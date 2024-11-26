<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceImg;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Service::with('images')->get(); // Eager load images

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('img', function ($row) {
                    $images = $row->images; // Get associated images
                    $imageHtml = '';

                    foreach ($images as $image) {
                        $imageHtml .= '<img src="' . asset('images/services/' . $image->image) . '" width="50" height="50" class="img-thumbnail" style="margin: 2px;" />';
                    }

                    return $imageHtml; // Return the HTML for images
                })
                ->addColumn('action', function ($row) {
                    $btn = '<div class="d-flex justify-content-around">';

                    // Add verification button if the service is not verified
                    if ($row->status != 'verified') {
                        $btn .= '<button class="btn btn-outline-success btn-sm verify-btn" data-id="' . $row->id . '">
                            <i class="fas fa-check"></i> Verifikasi
                          </button>';
                    }

                    // Add delete button
                    $btn .= '<button class="btn btn-outline-danger btn-sm delete-btn" data-id="' . $row->id . '">
                        <i class="fas fa-trash"></i> Hapus
                      </button>';
                    $btn .= '</div>';
                    return $btn;
                })
                ->make(true);
        }

        return view('admin_page.service.index');
    }

    public function create()
    {
        return view('admin_page.service.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'seller_id' => 'required|string',
            'service_name' => 'required|string',
            'service_time' => 'nullable|integer',
            'price' => 'required|integer',
            'detail_service' => 'nullable|string',
            'category_service' => 'nullable|string',
            'brand' => 'nullable|string',
            'status' => 'nullable|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate images
        ]);

        // Generate SKU
        $serviceNameSlug = Str::slug($request->service_name); // Create a slug from the service name
        $sku = $this->generateUniqueSku($serviceNameSlug);

        // Create the service with the generated SKU
        $service = Service::create(array_merge($request->except('images'), ['sku' => $sku]));

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images/services'), $imageName); // Save image to public/images/services
                ServiceImg::create([
                    'service_id' => $service->id, // Ensure service_id is set correctly
                    'image' => $imageName,
                ]);
            }
        }

        return redirect()->route('services.index')->with('success', 'Service created successfully.');
    }

    private function generateUniqueSku($serviceNameSlug)
    {
        do {
            $randomPart1 = Str::random(5); // Generate 5 random characters
            $randomPart2 = Str::random(5); // Generate another 5 random characters
            $sku = "{$serviceNameSlug}-{$randomPart1}-{$randomPart2}"; // Combine to form SKU
        } while (Service::where('sku', $sku)->exists()); // Check for uniqueness

        return $sku;
    }

    public function verify($id)
    {
        $service = Service::find($id);
        if ($service) {
            $service->status = 'verified'; // Update the status to verified
            $service->save();
            return response()->json(['success' => 'Status updated to verified']);
        }
        return response()->json(['error' => 'Service not found'], 404);
    }

    public function destroy($id)
    {
        $service = Service::find($id);
        if ($service) {
            $service->delete();
            return response()->json(['success' => 'Service deleted successfully']);
        }
        return response()->json(['error' => 'Service not found'], 404);
    }
}
