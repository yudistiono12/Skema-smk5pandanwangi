<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BeritaController extends Controller
{
    public function index () {
        return view('dashboard.berita.index', [
            'title' => 'Data Berita',
            'beritas' => Artikel::latest()->paginate(10)
        ]);
    }
}
