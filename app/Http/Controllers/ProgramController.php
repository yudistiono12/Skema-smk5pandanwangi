<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Support\Str;
use App\Models\JenisProgram;
use Illuminate\Http\Request;
use App\Models\DetailProgram;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ProgramController extends Controller
{  
    
    
    public function index() {
        $pinggir = JenisProgram::whereExists(function($query)
                {
                    $query->select(Program::raw(1))
                          ->from('programs')
                          ->whereRaw('jenis_programs.id = programs.jenis_id');
                })->get();
        // dd($pinggir);
        return view('dashboard.program.index', [
            'title' => 'Data Section',
            'pinggirs' => $pinggir,
            'programs' => Program::first()->paginate(10)
        ]);
    }

    public function create() {
        $pinggir = JenisProgram::whereExists(function($query)
                {
                    $query->select(Program::raw(1))
                          ->from('programs')
                          ->whereRaw('jenis_programs.id = programs.jenis_id');
                })->get();

        $Section = JenisProgram::whereNotExists(function($query)
                {
                    $query->select(Program::raw(1))
                          ->from('programs')
                          ->whereRaw('jenis_programs.id = programs.jenis_id');
                })->get();

        return view('dashboard.program.create', [
            'title' => 'Tambah Section Baru',
            'pinggirs' => $pinggir,
            'jenis_programs' => $Section
        ]);
    }

    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'nama_program' => 'required|max:255',
            'slug'  => 'required|unique:programs',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10024',
            'status' => 'required',
            'jenis_id'   => 'required',
            'keterangan'  => 'required'
        ]);

        if($request->file('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('images');
        }else{
            $validatedData['foto'] = 'no_image.png';
        }
        
        
        Program::create($validatedData);
        return redirect('/dashboard/programs')->with('berhasil', "section baru berhasil ditambahkan");
    } 

    public function checkSlug(Request $request) 
    {
        $slug = SlugService::createSlug(Program::class, 'slug', $request->nama_program);
        return response()->json(['slug' => $slug]);
    }

    public function edit(Program $program)
    {
        $pinggir = JenisProgram::whereExists(function($query)
                {
                    $query->select(Program::raw(1))
                          ->from('programs')
                          ->whereRaw('jenis_programs.id = programs.jenis_id');
                })->get();
        
        $jenisProgram = JenisProgram::whereNotExists(function($query)
        {
            $query->select(Program::raw(1))
                  ->from('programs')
                  ->whereRaw('jenis_programs.id = programs.jenis_id');
        })->get();

        return view('dashboard.program.edit', [
            'title' => 'Edit Section',
            'pinggirs' => $pinggir,
            'program'   => $program,
            'jenis_programs' => $jenisProgram
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        // dd($program->status);
        $rules = [
            'nama_program' => 'required|max:255',
            'slug'  => 'required|unique:programs',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10024',
            'status' => 'required',
            'jenis_id'   => 'required',
            'keterangan'  => 'required'
        ];

        if ($request->slug != $program->slug) {
            $rules['slug'] = 'required|unique:programs';
        }
        $validatedData = $request->validate($rules);
        if($request->file('foto')) {
            if ($request->fotolama) {
                Storage::delete($request->fotolama);
            }
            $validatedData['foto'] = $request->file('foto')->store('images');
        }
        
        
        Program::where('id', $program->id)
                    ->update($validatedData);
        return redirect('/dashboard/programs')->with('berhasil', "Section berhasil diubah");
    }

    public function updateStatus(Request $request, Program $program) {
        Program::where('id', $program->id)->update(['status' => $request->status]);
        return redirect('/dashboard/programs')->with('berhasil', "Status berhasil diubah");
    }

    public function destroy(Program $program)
    {
        if ($program->foto != "no_image.png" && $program->foto ) {
            Storage::delete($program->foto);
        } 
            Program::destroy($program->id);
            return redirect('/dashboard/programs')->with('berhasil', "Section berhasil dihapus");
        
        
    }

    // tutup program

    // buka sub
    public function subindex($program)
    {
        $pinggir = JenisProgram::whereExists(function($query)
        {
            $query->select(Program::raw(1))
                  ->from('programs')
                  ->whereRaw('jenis_programs.id = programs.jenis_id');
        })->get();

        

        $data = Program::where('jenis_id', $program)->get();
        $detail = null;
        if ($program === 1 ){
            $detail = DetailProgram::where('program_id', $data[0]['id'])->get();
        }
        return view('dashboard.program.subindex', [
            'title' => $data[0]['nama_program'],
            'details' => $detail,
            'pinggirs' => $pinggir,
            'datas'   => $data
        ]);
    }

    
}
