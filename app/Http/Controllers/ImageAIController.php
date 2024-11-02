<?php

namespace App\Http\Controllers;

use App\Models\ImageAI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
class ImageAIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    // =================================================
    
    public function test($url,$path = 'cdn/'){
        $response = Http::get($url);

        // Check if the request was successful
        if ($response->successful()) {
            // Generate a unique name for the image
            $imageName = basename($url);
    
            // Save the image to the 'public' disk within the 'cdn' folder
            Storage::disk('public')->put($path . $imageName, $response->body());
    
            // Generate the URL to access the image
            $imageUrl = Storage::url($path . $imageName);
    
            return response()->json($imageUrl);
        }
    
        return 'Failed to download image.';
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImageAI $imageAI)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImageAI $imageAI)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ImageAI $imageAI)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImageAI $imageAI)
    {
        //
    }
}
