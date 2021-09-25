<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class SponsorController extends Controller
{
    public function index () {
        return view('dashboard.sponsor.index', [
            'title' => 'Data Kerja Sama',
            'sponsors' => Sponsor::latest()->paginate(10)
        ]);
    }

    public function create() {
        return view('dashboard.sponsor.create', [
            'title' => 'Tambah Kerja Sama Baru'
        ]);
    }

    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10024',
            'status' => 'required'
        ]);

        if($request->file('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('sponsor');
        }else{
            $validatedData['foto'] = 'no_image.png';
        }
        
        
        Sponsor::create($validatedData);
        return redirect('/dashboard/sponsors')->with('berhasil', "Sponsor baru berhasil ditambahkan");
    } 

    public function edit(Sponsor $sponsor)
    {

        return view('dashboard.sponsor.edit', [
            'title' => 'Edit Sponsor',
            'sponsor'   => $sponsor
        ]);
    }

    public function update(Request $request, Sponsor $sponsor)
    {
        // dd($program->status);
        $rules = [
            'nama' => 'required|max:255',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10024',
            'status' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('foto')) {
            if ($request->fotolama) {
                Storage::delete($request->fotolama);
            }
            $validatedData['foto'] = $request->file('foto')->store('sponsor');
        }
        
        
        Sponsor::where('id', $sponsor->id)
                    ->update($validatedData);
        return redirect('/dashboard/sponsors')->with('berhasil', "data Sponsor berhasil diubah");
    }

    public function destroy(Sponsor $sponsor)
    {
        if ($sponsor->foto != "no_image.png" && $sponsor->foto ) {
            Storage::delete($sponsor->foto);
        } 
            sponsor::destroy($sponsor->id);
            return redirect('/dashboard/sponsors')->with('berhasil', "Sponsor berhasil dihapus");
        
        
    }

    public function updateStatus(Request $request, Sponsor $sponsor) {
        Sponsor::where('id', $sponsor->id)->update(['status' => $request->status]);
        return redirect('/dashboard/sponsors')->with('berhasil', "Status berhasil diubah");
    }

}

