<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AktivitasController extends Controller
{
    public function index () {
        return view('dashboard.aktivitas.index', [
            'title' => 'Data Galeri Aktivitas',
            'aktivitas' => Konten::latest()->where('jenis_konten_id', 0)->paginate(10)
        ]);
    }
    public function create() {
        return view('dashboard.aktivitas.create', [
            'title' => 'Tambah Aktivitas Baru'
        ]);
    }


    public function checkSlug(Request $request) 
    {
        $slug = SlugService::createSlug(Konten::class, 'slug', $request->nama_konten);
        return response()->json(['slug' => $slug]);
    }

    public function store(Request $request)
    {
      
        $validatedData = $request->validate([
            'nama_konten' => 'required|max:255',
            'slug'  => 'required|unique:kontens',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10024',
            'jenis_konten_id' => 'required',
            'status' => 'required',
            'keterangan' => 'required'
        ]);

        if($request->file('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('aktivitas');
        }else{
            $validatedData['foto'] = 'no_image.png';
        }
            
        
        
        Konten::create($validatedData);
        return redirect('/dashboard/aktivitas')->with('berhasil', "Aktivitas baru berhasil ditambahkan");
    } 

    public function edit(Konten $konten)
    {

        return view('dashboard.aktivitas.edit', [
            'title' => 'Edit Aktivitas',
            'aktivitas'   => $konten
        ]);
    }

    public function update(Request $request, Konten $konten)
    {
        // dd($program->status);
        $rules = [
            'nama_konten' => 'required|max:255',
            'slug'  => 'required|unique:kontens',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10024',
            'jenis_konten_id' => 'required',
            'status' => 'required',
            'keterangan' => 'required'
        ];

        if ($request->slug != $konten->slug) {
            $rules['slug'] = 'required|unique:kontens';
        }
        $validatedData = $request->validate($rules);
        if($request->file('foto')) {
            if ($request->fotolama) {
                Storage::delete($request->fotolama);
            }
            $validatedData['foto'] = $request->file('foto')->store('aktivitas');
        }
        
        
        Konten::where('id', $konten->id)
                    ->update($validatedData);
        return redirect('/dashboard/aktivitas')->with('berhasil', "data Akivitas berhasil diubah");
    }

    public function destroy(Konten $konten)
    {
        if ($konten->foto != "no_image.png" && $konten->foto ) {
            Storage::delete($konten->foto);
        } 
            Konten::destroy($konten->id);
            return redirect('/dashboard/aktivitas')->with('berhasil', "data Aktivitas berhasil dihapus");
        
        
    }

    public function updateStatuse(Request $request, Konten $konten) {
        Konten::where('id', $konten->id)->update(['status' => $request->status]);
        return redirect('/dashboard/aktivitas')->with('berhasil', "Status berhasil diubah");
    }
}
