<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use App\Models\Program;
use App\Models\Sponsor;
use App\Models\Pengaturan;
use Illuminate\Http\Request;
use App\Models\DetailProgram;
use Illuminate\Routing\Controller;

class FrontendController extends Controller
{
    public function index() {
        $about = Program::where('slug', "about")->get(); //section
        $detailAbout = DetailProgram::where('program_id', $about[0]->id)->get();

        $sambutan = Program::where('slug', "about-sambutan")->get(); //section
        $video_profile = Program::where('slug', "about-videprofil")->get(); //section
        $programe = Program::where('slug', "about-program")->get(); //section
        $detailProgram = DetailProgram::where('program_id', $programe[0]->id)->get();

        $te = Program::where('slug', "jurusan-fitur1")->get(); //section
        $detailTe = DetailProgram::where('program_id', $te[0]->id)->get();

        $rpl = Program::where('slug', "jurusan-fitur2")->get(); //section
        $detailRpl = DetailProgram::where('program_id', $rpl[0]->id)->get();

        $tja = Program::where('slug', "jurusan-fitur3")->get(); //section
        $detailTja = DetailProgram::where('program_id', $tja[0]->id)->get();

        $aktivitas = Program::where('slug', "aktivitas")->get(); //section
        $semuaAktivitas = Konten::where('status', 1)->Where('jenis_konten_id', 0)->get();

        $semuaStory = Konten::where('status', 1)->Where('jenis_konten_id', 1)->get();

        $semuaSponsor = Sponsor::where('status', 1)->get();

        $programs = Program::where('status', "1")->get();//untuk menampilkan di navbar yang statusnya 1

       

        return view('index', [
            'title' => 'SMK 5 Pandan Wangi',
            'pengaturan' => Pengaturan::get(),
            'programs' => $programs,
            'about' => $about,
            'detailAbout' => $detailAbout,
            'sambutan' => $sambutan,
            'video_profile' => $video_profile,
            'programe' => $programe,
            'detailProgram' => $detailProgram,
            'te' => $te,
            'detailTe' => $detailTe,
            'rpl' =>$rpl,
            'detailRpl' =>  $detailRpl,
            'tja' =>$tja,
            'detailTja' => $detailTja,
            'aktivitas' => $aktivitas,
            'semuaAktifitas' => $semuaAktivitas,
            'semuaStory' => $semuaStory,
            'semuaSponsor' => $semuaSponsor
        ]);
     }
}
