<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    /**
     * Menampilkan daftar gambar.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::latest()->get();

        return view('images.index', compact('images'));
    }

    /**
     * Menampilkan form untuk mengunggah gambar baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('images.create');
    }

    /**
     * Menyimpan gambar baru ke dalam penyimpanan.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $image = new Image;
        $image->name = $request->name;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/images', $filename);
            $image->file_path = $filename;
            $image->extension = $file->getClientOriginalExtension();
        }

        $image->save();

        return redirect()->route('images.index')
            ->with('success', 'Gambar berhasil diunggah.');
    }

    /**
     * Menampilkan form untuk mengedit gambar.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image = Image::findOrFail($id);

        return view('images.edit', compact('image'));
    }

    /**
     * Memperbarui gambar yang ada dalam penyimpanan.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $image = Image::findOrFail($id);
        $image->name = $request->name;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/images', $filename);
            $image->file_path = $filename;
            $image->extension = $file->getClientOriginalExtension();
        }

        $image->save();

        return redirect()->route('images.index')
            ->with('success', 'Gambar berhasil diperbarui.');
    }

    /**
     * Menghapus gambar dari penyimpanan.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Image::findOrFail($id);
        $image->delete();

        return redirect()->route('images.index')
            ->with('success', 'Gambar berhasil dihapus.');
   
    }

}