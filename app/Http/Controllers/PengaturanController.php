<?php

namespace App\Http\Controllers;

use App\Models\Pengaturan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PengaturanController extends Controller
{
    public function index () {
        return view('dashboard.pengaturan', [
            'title' => 'Data Galeri Aktivitas',
            'pengaturan' => Pengaturan::get()
        ]);
    }

    public function update(Request $request, Pengaturan $pengaturan)
    {
        // dd($program->status);
        $rules = [
            'nama' => 'required|max:255',
            'moto' => 'required|max:255',
            'detailmoto' => 'required|max:255',
            'fb' => 'required|max:255',
            'twitter' => 'required|max:255',
            'instagram' => 'required|max:255',
            'video_profile' => 'required|max:255',
            'alamat' => 'required',
            'no_hp' => 'required|max:16',
            'email' => 'required|max:255',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10024'
        ];

        $validatedData = $request->validate($rules);
        if($request->file('foto')) {
            if ($request->fotolama) {
                Storage::delete($request->fotolama);
            }
            $validatedData['foto'] = $request->file('foto')->store('pengaturan');
        }
        
        
        Pengaturan::where('id', $pengaturan->id)
                    ->update($validatedData);
        return redirect('/dashboard/pengaturan')->with('berhasil', "data pengaturan berhasil diubah");
    }

}
