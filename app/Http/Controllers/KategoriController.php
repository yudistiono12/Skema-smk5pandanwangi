<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class KategoriController extends Controller
{
    public function index () {
        return view('dashboard.kategori.index', [
            'title' => 'Data Kategori',
            'kategoris' => Kategori::latest()->paginate(10)
        ]);
    }
}
