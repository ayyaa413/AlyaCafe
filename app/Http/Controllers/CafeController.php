<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CafeController extends Controller
{
    public function index() {
        $cafes = Cafe::all(); // Mengambil semua data cafe
        return view('admin.cafe.index', compact('cafes')); // Menampilkan view dengan data cafe
    }
    

    public function create() {
        return view('admin.cafe.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'gambar' => 'image|nullable|max:1999',
            'rating' => 'nullable|numeric|min:1|max:5' // Validasi rating
        ]);
    
        // ... Kode penyimpanan gambar tetap sama
        if($request->file('gambar')){
            $file_name = $request->nama.'_image.'.$request->file('gambar')->getClientOriginalExtension();
            $request->file('gambar')->storeAs('cafe_images');
        }


        Cafe::create([
            'nama' => $validatedData['nama'],
            'deskripsi' => $validatedData['deskripsi'],
            'lokasi' => $validatedData['lokasi'],
            'gambar' => $file_name,
            'rating' => $validatedData['rating'] // Simpan rating
        ]);
    
        return redirect()->route('admin.cafe.index')->with('success', 'Cafe berhasil ditambahkan!');
    }
    

    public function edit($id) {
        $cafe = Cafe::find($id);
        return view('admin.cafe.edit', compact('cafe'));
    }

    public function update(Request $request, $id) {

        $validatedData = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'gambar' => 'image|nullable|max:1999',
            'rating' => 'nullable|numeric|min:1|max:5' // Validasi rating
        ]);
        
        $cafe = Cafe::find($id);

        if ($request->hasFile('image')) {
            if ($cafe->image && file_exists(storage_path('app/public/images/' . $cafe->image))) {
                unlink(storage_path('app/public/images/' . $cafe->image));
            }

            $file_name = $request->title . '.' . $request->file('image')->getClientOriginalExtension();
            $imagePath = $request->file('image')->storeAs('public/images', $file_name);

            $cafe->image = $file_name;
        }

    
        $cafe->update([
            'nama' => $validatedData['nama'],
            'deskripsi' => $validatedData['deskripsi'],
            'lokasi' => $validatedData['lokasi'],
            'gambar' => 'image|nullable|max:1999',
            'rating' => $validatedData['rating'] // Update rating
        ]); 
        return redirect()->route('admin.cafe.index')->with('succes', 'Cafe berhasil update');
     }

    public function destroy($id) {
        $cafe = Cafe::find($id);
        if ($cafe->gambar != 'noimage.jpg') {
            Storage::delete('public/cafe_images/'.$cafe->gambar);
        }
        $cafe->delete();
        return redirect()->route('admin.cafe.index')->with('success', 'Cafe berhasil dihapus!');
    }
}
