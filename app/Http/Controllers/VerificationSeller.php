<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SellerVerification;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class VerificationSeller extends Controller
{
    public function showOpenCam()
    {
        return view('scan.open_cam');
    }

    public function SelfieCam()
    {
        return view('scan.selfie_cam');
    }

    public function scan2()
    {
        return view('scan.scan2');
    }

    public function cfKTP()
    {
        $sellerVerification = SellerVerification::where('user_id', auth()->id())->first();
        return view('scan.cf_ktp', compact('sellerVerification'));
    }

    public function cfSelfie()
    {
        $sellerVerification = SellerVerification::where('user_id', auth()->id())->first();
        return view('scan.cf_selfie', compact('sellerVerification'));
    }

    public function saveKtpImage(Request $request)
    {
        $data = $request->input('ktp_image');

        if ($data) {
            try {
                $image = base64_decode($data);
                $imageName = time() . '.png';

                $sellerVerification = SellerVerification::where('user_id', auth()->id())->first();

                if ($sellerVerification) {
                    if ($sellerVerification->ktp_image) {
                        Storage::disk('public')->delete('ktp_images/' . $sellerVerification->ktp_image);
                    }

                    $sellerVerification->update([
                        'ktp_image' => $imageName,
                    ]);
                } else {
                    SellerVerification::create([
                        'ktp_image' => $imageName,
                        'user_id' => auth()->id(),
                    ]);
                }

                Storage::disk('public')->put('ktp_images/' . $imageName, $image);

                return response()->json(['success' => true]);
            } catch (\Exception $e) {
                return response()->json(['success' => false, 'message' => 'Error saving image: ' . $e->getMessage()], 500);
            }
        }

        return response()->json(['success' => false, 'message' => 'Image data is missing.'], 400);
    }

    public function saveSelfieImage(Request $request)
    {
        $data = $request->input('selfie_image');

        if ($data) {
            try {
                $image = base64_decode($data);
                $imageName = time() . '.png';

                $sellerVerification = SellerVerification::where('user_id', auth()->id())->first();

                if ($sellerVerification) {
                    if ($sellerVerification->selfie_image) {
                        Storage::disk('public')->delete('selfie_images/' . $sellerVerification->selfie_image);
                    }

                    $sellerVerification->update([
                        'selfie_image' => $imageName,
                    ]);
                } else {
                    $sellerVerification = SellerVerification::create([
                        'selfie_image' => $imageName,
                        'user_id' => auth()->id(),
                    ]);
                }

                Storage::disk('public')->put('selfie_images/' . $imageName, $image);

                return response()->json(['success' => true]);
            } catch (\Exception $e) {
                return response()->json(['success' => false, 'message' => 'Error saving selfie: ' . $e->getMessage()], 500);
            }
        }

        return response()->json(['success' => false, 'message' => 'Selfie data is missing.'], 400);
    }

    public function completeVerification(Request $request)
    {
        $sellerVerification = SellerVerification::where('user_id', auth()->id())->first();

        if ($sellerVerification) {
            $uniqueCode = Str::uuid()->toString();

            try {
                // Update the seller verification with a unique code
                $sellerVerification->update([
                    'uniq_id' => $uniqueCode,
                ]);

                // Create a new seller record with the same ID as the user_id
                \App\Models\Seller::create([
                    'id' => auth()->id(),
                    'user_id' => auth()->id(),
                    'seller_verification_id' => $sellerVerification->id,
                    'shop_name' => auth()->user()->name,
                    'status' => 'pending',
                ]);

                Log::info("Unique code successfully generated and seller record created for user_id: " . auth()->id());

                return response()->json(['success' => true, 'uniq_id' => $uniqueCode]);
            } catch (\Exception $e) {
                Log::error('Error during verification completion: ' . $e->getMessage());
                return response()->json(['success' => false, 'message' => 'Failed to complete verification.'], 500);
            }
        }

        return response()->json(['success' => false, 'message' => 'User verification record not found.'], 404);
    }
}
