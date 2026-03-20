<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ImagemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $request->validate([
            'imagem' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048'
        ]);

        if ($request->hasFile('imagem')) {
            $manager = new ImageManager(new Driver());
            $image = $manager->read($request->file('imagem'));

            $filename = time() . '.webp';
            $image->toWebp(80)->save(storage_path("app/public/imagens/{$filename}"));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($filename)
    {
        $manager = new ImageManager(new Driver());
        $image = $manager->read(public_path("imagens/{$filename}.jpg"));

        return response($image->toWebp(80))->header('Content-Type', 'image/webp');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
