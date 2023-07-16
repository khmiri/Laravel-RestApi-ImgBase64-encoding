<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    public function show(Request $request)
    {
        $apiKey = $request->input('api_key');
        $validApiKey = env('API_KEY');
    
        if ($apiKey !== $validApiKey) {
            return response()->json(['error' =>$validApiKey], 401);
        }
    
        $imageName = $request->input('image_name');
        $path = public_path('images/' . $imageName);
    
        if (file_exists($path)) {
            $imageData = base64_encode(file_get_contents($path));
    
            return response()->json([
                'image' => $imageData,
            ]);
        }
    
        return response()->json([
            'error' => 'Image not found.',
        ], 404);
    }
    
}
