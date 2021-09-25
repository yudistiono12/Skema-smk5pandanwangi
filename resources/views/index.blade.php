{{-- {{ dd($programs[1]->jenis_program->nama_jenis) }} --}}

{{-- {{ dd($detailAbout[1]) }}; --}}
{{-- {{ dd($semuaAktifitas[0]) }} --}}

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/bs5/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" /> 


    <!-- CSS Lainnya -->
    <link rel="stylesheet" href="{{ asset('frontend/css/navbar.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/body.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/slick/slick-theme.css')}}"/>

    <title>{{ $title }}</title>
</head>

<body style="background-color: #fff; color: #212529;">

    <img src="{{ asset('frontend/assets/vector-bg.png')}}" class="bg" width="75%">

    <!-- navbar menu -->
    <nav class="navbar navbar-expand-lg navbar-light mt-4 fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('storage/'.$pengaturan[0]->foto)}}" height="35px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <div></div>
                <ul class="nav nav-pills">
                    @foreach ($programs as $program)
                    <li class="nav-item">
                        <a class="nav-link rounded-pill link tebel-sedang me-4" href="#{{ $program->slug }}">{{ $program->jenis_program->nama_jenis }}</a>
                    </li>
                    @endforeach
                </ul>
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?= $pengaturan[0]->fb ?>" target='_blank' class="text-decoration-none link rounded-pill"><i class="fab fa-facebook-f"></i></a>&nbsp;
                        <a href="<?= $pengaturan[0]->instagram ?>" target='_blank' class="text-decoration-none link rounded-pill"><i class="fab fa-instagram"></i></a>&nbsp;
                        <a href="<?= $pengaturan[0]->twitter ?>" target='_blank' class="text-decoration-none link rounded-pill"><i class="fab fa-twitter"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- konten -->

    <div class="container">

        <br><br><br>

        <div class="row mt-5 mb-5">

            <div class="col-lg-12 gambar">
                <img src="{{ asset('frontend/assets/vector-konten.png')}}" width="100%">
            </div>

            <div class="col-sm-12 position-relative p-4">

                <div class="position-absolute top-0 end-0">
                    <img src="{{ asset('frontend/assets/vector-konten.png')}}" class="img">
                </div>

                <h1 class="mt-5 text-truncate tebel-sedang text-green text-uppercase">{{ $sub_kalimat = substr($pengaturan[0]->moto,0,8);}}</h1>
                <h1 class=" text-truncate tebel-sedang text-green text-uppercase">{{ $sub_kalimat = substr($pengaturan[0]->moto,8,18);}}</h1>

                <div class="desc mt-4">
                    <p>{{ $pengaturan[0]->detailmoto }}</p>
                </div>

                <div class="mt-5">
                    <a href="#" class="button rounded-pill shadow tebel-sedang">Gabung Sekarang</a>
                </div>

            </div>

        </div>

    </div>

    <section id="about">
        <div class="container" style="margin-top: 6cm;">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>{{ $about[0]->nama_program }}</h2>
                    <p class="font-warna2 text-center">{{  strip_tags($about[0]->keterangan) }}</p>
                    <!-- <div class="position-absolute"></div> -->
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-12 ">
                            <div class="icon-block ">
                                <div class="bg-color-1 icon-block-img m-0 text-info">
                                    <i class="fas fa-laptop-code"></i>
                                </div>
                                <div class="icon-block-info">
                                    <h3>{{ $detailAbout[0]->judul }}</h3>
                                    <p class="font-warna2 text-center">{{ $detailAbout[0]->keterangan }}</p>                                        
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-12">
                            <div class="icon-block">
                                <div class=" bg-color-2 icon-block-img m-0 text-warning">
                                    <i class="fas fa-school"></i>
                                </div>
                                <div class="icon-block-info">
                                    
                                    <h3>{{ $detailAbout[0]->judul }}</h3>
                                    <p class="font-warna2 text-center">{{ $detailAbout[0]->keterangan }}</p>
                                        
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-12"> 
                        <div class="icon-block">
                            <div class=" bg-color-3 icon-block-img m-0 text-danger">
                                <i class="fa fa-chalkboard-teacher"></i>
                            </div>
                            <div class="icon-block-info">
                                <h3>{{ $detailAbout[0]->judul }}</h3>
                                <p class="font-warna2 text-center">{{ $detailAbout[0]->keterangan }}</p>                                            
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-12">
                        <div class="icon-block">
                            <div class=" bg-color-7 icon-block-img m-0 text-secondary">
                                <i class="fa fa-building"></i>
                            </div>
                            <div class="icon-block-info">
                                <h3>{{ $detailAbout[0]->judul }}</h3>
                                <p class="font-warna2 text-center">{{ $detailAbout[0]->keterangan }}</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-sambutan">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 text-start " style="visibility: visible; animation-name: fadeInRight;">
                    <small>Sambutan</small>
                    <h2>{{ $sambutan[0]->nama_program }}</h2>
                    <div>
                        {!! $sambutan[0]->keterangan !!}
                    </div>
                </div>
                <div class=" offset-1 col-md-5 gambar3">
                    <img src="{{ asset('frontend/assets/home/kepsek.png')}}" width="130%">
                </div>
            </div>
        </div>
    </section>

    <section id="about-videprofil">
        <div class="container-fluid mt-3" style="background-color: #f9f9f9ff;">
            <div class="row">
                <div class="col-md-6"> 
                    <img src="{{ asset('storage/'.$video_profile[0]->foto)}}" width="80%">   
                </div>
                <div class="col-md-5 offset-end-1 mt-3">
                    <div class=""><br><br><br>
                        <small>Gas, Nonton!</small>
                        <h2 class="mb-4 mt-2">{{ $video_profile[0]->nama_program }}</h2>
                        <p class="font-warna2">{!! $video_profile[0]->keterangan !!}</p>
                        <!-- <button class="btn" style="background-color: #3D4051; color: white;"><i class="fas fa-play"></i> Mainkan</button> -->
                        <a class="btn tombol rounded-pill tebel-sedang mt-5 col-md-5 col-lg-5" data-bs-toggle="modal" href="#exampleModal" style="background-color: #3D4051; color: white;" role="button"><i class="fas fa-play"></i> Mainkan</a>
                        <!-- Modal -->
                            <div class="modal fade modal-xl profile-mdl" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                        <!-- <video width="100%" controls autoplay loop>
                                            <source src="assets/gunung.mp4" type="video/mp4">
                                        </video> -->
                                        <iframe width="780" height="500" src="{{ $pengaturan[0]->video_profile}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-program">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-5 ">
                    <h2 class="mb-3 mt-1">{{ $programe[0]->nama_program }}</h2>
                    {!! $programe[0]->keterangan !!}
                    <a class="btn tombol col-md-5 button rounded-pill tebel-sedang me-4 col-lg-5 mt-5" href="#">Detail</a> 
                </div>
                <div class="col-md-6 offset-1">
                    <div class="row pd-0 font-warna2">
                        <div class="timeline-icon">
                            <div class="timeline-icon-item">
                                <div class="icon-item  bg-color-1 text-info">
                                    <i class="fas fa-charging-station"></i>
                                </div>
                                <div class="icon-item-info text">
                                    {{ $detailProgram[0]->judul }}<br><br><br>
                                </div>
                            </div>
                            <div class="timeline-icon-item">
                                <div class="icon-item  bg-color-2 text-warning">
                                    <i class="fa fa-laptop-code"></i>
                                </div>
                                <div class="icon-item-info text">
                                    {{ $detailProgram[1]->judul }}<br><br><br>
                                </div>
                            </div>
                            <div class="timeline-icon-item">
                                <div class="icon-item  bg-color-3 text-danger">
                                    <i class="fa fa-network-wired"></i>
                                </div>
                                <div class="icon-item-info">
                                    {{ $detailProgram[2]->judul }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="jurusan-fitur1">
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-5 offset-1 ">
                    <h2>{{ $te[0]->nama_program }}</h2>
                    {!! $te[0]->keterangan  !!}
                    <div class="card border-0" id="keahlian1">
                        <div class="card-header">
                            <h5 class="card-title w-100">
                                <button class="btn" type="button" data-bs-toggle="collapse" data-parent="#keahlian1" data-bs-target="#elek1" aria-expanded="true" aria-controls="elek1">
                                    <i class="fas fa-chart-bar fa-2x"></i><span>{{ $detailTe[0]->judul }}</span>
                                </button>
                            </h5>
                        </div>
                        <div class="collapse show" id="elek1" >
                            <div class="card card-body font-warna2">
                                {{ $detailTe[0]->keterangan }}
                            </div>
                        </div>
                        <div class="card-header">
                            <h5 class="card-title w-100"> 
                                <button class="btn" type="button" data-bs-toggle="collapse" data-parent="#keahlian1"  data-bs-target="#elek2" aria-expanded="false" aria-controls="elek2">
                                    <i class="fas fa-vihara fa-2x"></i><span>{{ $detailTe[1]->judul }}</span>
                                </button>
                            </h5>
                        </div>
                        <div class="collapse" id="elek2">
                            <div class="card card-body font-warna2">
                                {{ $detailTe[1]->keterangan }}
                            </div>
                        </div>
                        <div class="card-header">
                            <h5 class="card-title w-100"> 
                                <button class="btn" type="button" data-bs-toggle="collapse"  data-bs-target="#elek3" aria-expanded="false" aria-controls="elek3">
                                    <i class="fas fa-handshake fa-2x mt-2"></i><span>{{ $detailTe[2]->judul }}</span>
                                </button>
                            </h5>
                        </div>
                        <div class="collapse" id="elek3" data-parent="keahlian1">
                            <div class="card card-body font-warna2">
                                {{ $detailTe[2]->Keterangan }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mr-5 offset-1">
                    <img src="{{ asset('storage/'.$te[0]->foto)}}" class="ml-5 p-0 gambar3" width="100%" style="margin-left: 36px;">
                </div>
            </div>
        </div>
    </section>
    <section id="jurusan-fitur2">
        <div class="container-fluid mt-5">
            <div class="row">
                <!-- <div class="col-md-6"> -->
                    <img src="{{ asset('storage/'.$rpl[0]->foto)}}" class="p-0 gambar3 position-absolute" style="margin-left: -40px;padding: 0px; width: 50%;">
                <!-- </div> -->
                <div class="col-md-5 offset-7 ">
                    <h2>{{$rpl[0]->nama_program}}</h2>
                    {!! $rpl[0]->keterangan !!}
                    <div class="card border-0" id="keahlian1">
                        <div class="card-header">
                            <h5 class="card-title w-100">
                                <button class="btn" type="button" data-bs-toggle="collapse" data-parent="#keahlian1" data-bs-target="#rpl1" aria-expanded="true" aria-controls="rpl1">
                                    <i class="fas fa-chart-bar fa-2x"></i><span>{{ $detailRpl[0]->judul }}</span>
                                </button>
                            </h5>
                        </div>
                        <div class="collapse show" id="rpl1" >
                            <div class="card card-body font-warna2">
                                {{ $detailRpl[0]->keterangan }}
                            </div>
                        </div>
                        <div class="card-header">
                            <h5 class="card-title w-100"> 
                                <button class="btn" type="button" data-bs-toggle="collapse" data-parent="#keahlian1"  data-bs-target="#rpl2" aria-expanded="false" aria-controls="rpl2">
                                    <i class="fas fa-vihara fa-2x"></i><span>{{ $detailRpl[1]->judul }}</span>
                                </button>
                            </h5>
                        </div>
                        <div class="collapse" id="rpl2">
                            <div class="card card-body font-warna2">
                                {{ $detailRpl[1]->keterangan }}
                            </div>
                        </div>
                        <div class="card-header">
                            <h5 class="card-title w-100"> 
                                <button class="btn" type="button" data-bs-toggle="collapse"  data-bs-target="#rpl3" aria-expanded="false" aria-controls="rpl3">
                                    <i class="fas fa-handshake fa-2x mt-2"></i><span>{{ $detailRpl[2]->judul }}</span>
                                </button>
                            </h5>
                        </div>
                        <div class="collapse" id="rpl3" data-parent="keahlian1">
                            <div class="card card-body font-warna2">
                                {{ $detailRpl[2]->keterangan }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="jurusan-fitur3">
        <div class="container-fluid" style="margin-top: 200px;">
            <div class="row">
                <div class="col-md-5 offset-1 ">
                    <h2>{{ $tja[0]->nama_program }}</h2>
                    {!! $tja[0]->keterangan !!}
                    <div class="card border-0" id="keahlian3">
                        <div class="card-header">
                            <h5 class="card-title w-100">
                                <button class="btn" type="button" data-bs-toggle="collapse" data-parent="#keahlian3" data-bs-target="#tja1" aria-expanded="true" aria-controls="tja1">
                                    <i class="fas fa-chart-bar fa-2x"></i><span>{{ $detailTja[0]->judul }}</span>
                                </button>
                            </h5>
                        </div>
                        <div class="collapse show" id="tja1" >
                            <div class="card card-body font-warna2">
                                {{ $detailTja[0]->keterangan }}
                            </div>
                        </div>
                        <div class="card-header">
                            <h5 class="card-title w-100"> 
                                <button class="btn" type="button" data-bs-toggle="collapse" data-parent="#keahlian3"  data-bs-target="#tja2" aria-expanded="false" aria-controls="tja2">
                                    <i class="fas fa-vihara fa-2x"></i><span>{{ $detailTja[1]->judul }}</span>
                                </button>
                            </h5>
                        </div>
                        <div class="collapse" id="tja2">
                            <div class="card card-body font-warna2">
                                {{ $detailTja[1]->keterangan }}
                            </div>
                        </div>
                        <div class="card-header">
                            <h5 class="card-title w-100"> 
                                <button class="btn" type="button" data-bs-toggle="collapse"  data-bs-target="#tja3" aria-expanded="false" aria-controls="tja3">
                                    <i class="fas fa-handshake fa-2x mt-2"></i><span>{{ $detailTja[2]->judul }}</span>
                                </button>
                            </h5>
                        </div>
                        <div class="collapse" id="tja3" data-parent="keahlian3">
                            <div class="card card-body font-warna2">
                                {{ $detailTja[2]->keterangan }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mr-5 offset-1">
                    <img src="{{ asset('storage/'.$tja[0]->foto)}}" class="ml-5 p-0 gambar3" width="100%" style="margin-left: 36px;">
                </div>
            </div>
        </div>
    </section>

    <section id="aktivitas">
        <div class="container-fluid" style="margin-top: 200px;">
            <div class="row text-center text-white" style="background-color: #3d4051;">
                <small style="margin-top: 20px;">{{ $aktivitas[0]->keterangan }}</small><br><br>
                <h4 class="tebel-sedang mb-3">Galeri foto Aktivitas Skema</h4>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="slider">
                        @foreach ($semuaAktifitas as $aktifis)
                            <div class="card border-0 p-0 m-0" style="padding: 0px;">
                                <img src="{{ asset('storage/'.$aktifis->foto) }}" width="350px" height="300px">
                                <div class=" card-img-overlay d-flex align-items-center p-0">
                                    <h5 class=" card-title text-center flex-fill p-3 fs-3 " style="background-color: rgba(0, 0, 0, 0.7)">
                                    <a href="aktifitas/{{ $aktifis->slug }}" class="text-decoration-none text-white">{{ $aktifis->nama_konten }}</a>
                                    </h5>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>   
            </div>
            <br><br>
        </div>
    </section>

    <section id="berita">
        <div class="container mt-3">
            <div class="row">
                <h2 class="text-center tebel-sedang">Berita Terbaru</h2>
                <small class="font-warna2 text-center mb-5">
                    Ikuti terus informasi dan berita-berita terbaru Tentang Smk 5 Pandan Wangi
                </small>
                <div class="col-md-4">
                    <h5 class="tebel-sedang"><a href="#" class="text-decoration-none text-black"></a>Kategori Berita</h5>
                    <hr class="mb-3" style="width: 100px; height: 2px; margin: 0px;">
                    <!-- <ul class=" mt-3" style="border: 0px;"> -->
                        <li class="mb-3" style="list-style-type: none;"><a href="#" class="text-decoration-none text-dark">Informasi Umum</a></li>
                        <li class="mb-3" style="list-style-type: none;"><a href="#" class="text-decoration-none text-dark">Prestasi</a></li>
                        <li class="mb-3" style="list-style-type: none;"><a href="#" class="text-decoration-none text-dark">Agenda Sekolah</a></li>
                        <li class="mb-3" style="list-style-type: none;"><a href="#" class="text-decoration-none text-dark">Pengumuman Siswa</a></li>
                        <li class="mb-3" style="list-style-type: none;"><a href="#" class="text-decoration-none text-dark">Pengumuman pegawai</a></li>
                        <li class="mb-3" style="list-style-type: none;"><a href="#" class="text-decoration-none text-dark">Pengumuman Orang Tua Siswa</a></li>
                        <li class="mb-3" style="list-style-type: none;"><a href="#" class="text-decoration-none text-dark">Karya siswa</a></li>
                      <!-- </ul> -->
                </div>
                <div class="col-md-8 ">
                    <div class="row">
                        <div class="col-md-6 me-auto" >
                            <div class="card" style="width: 23rem;">
                              <div class="position-absolute bg-dark px-3 py-2 text-white" style="background-color: #3D4051"><a href="#" class="text-decoration-none text-white">Rapat Guru Besar</a> <br> <small style="font-size: 12px;" class="text-center">20 mei 2018</small></div>
                              <img src="https://source.unsplash.com/500x300?meeting" class="card-img-top" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 me-auto mb-2">
                            <div class="card" style="width: 23rem;">
                              <div class="position-absolute bg-dark px-3 py-2 text-white" style="background-color: #3D4051"><a href="#" class="text-decoration-none text-white">Penerimaan Siswa baru</a> <br> <small style="font-size: 12px;" class="text-center">20 mei 2019</small></div>
                              <img src="https://source.unsplash.com/500x300?student" class="card-img-top" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 me-auto mb-2" style="margin-right: 150px;">
                            <div class="card" style="width: 23rem;">
                              <div class="position-absolute bg-dark px-3 py-2 text-white" style="background-color: #3D4051"><a href="#" class="text-decoration-none text-white">Bakti Masyarakat</a> <br> <small style="font-size: 12px;" class="text-center">20 mei 2020</small></div>
                              <img src="https://source.unsplash.com/500x300?community service" class="card-img-top" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 me-auto mb-2">
                            <div class="card" style="width: 23rem;">
                              <div class="position-absolute bg-dark px-3 py-2 text-white" style="background-color: #3D4051"><a href="#" class="text-decoration-none text-white">Semua Berita</a> <br> <small style="font-size: 12px;" class="text-center">Tampilkan Semua</small></div>
                              <img src="https://source.unsplash.com/500x300?grey" class="card-img-top" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="success-stori">
        <div class="container mt-5 mb-5">
            <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="tebel-sedang mb-5">Success Story (Alumni)</h2>
                <div class="slidersuc">

                    @foreach ($semuaStory as $story)

                    <div style="width: 20px; height: 425px;" class="card border-0">
                        <div class="position-absolute text-story">
                            <small>
                                {!! $story->keterangan !!}
                            </small>
                            <h6 class="mt-2 tebel-sedang">- {{ $story->nama_konten }}</h6>
                        </div>
                        <img src="{{ asset('storage/'.$story->foto) }}" style="width: 550px; margin:10px;">
                    </div>
                        
                    @endforeach

                </div>
            </div>
            </div>
        </div>
    </section>

    <section id="sponsor">
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-10 offset-1">
                    <div class="slider2">
                        @foreach ($semuaSponsor as $sponsor)
                            <div class="card p-0 m-0" style="padding: 0px;border: 0;">
                                <img src="{{ asset('storage/'.$sponsor->foto) }}" width="70px" height="70px" title="{{ $sponsor->nama }}">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="container-fluid"> 
    <!-- Footer -->
    <footer class="text-center mt-5 text-lg-start text-dark" style="background-color: #ECEFF1">
      <!-- Section: Social media -->
      <section class="d-flex m-0 justify-content-between p-4 text-white" style="background-color: #3D4051;">
        <!-- Left -->
        <div class="me-5">
          <span>Untuk dapat terhubung dengan kami di Jejaring Sosial Media :</span>
        </div>
        <!-- Left -->
  
        <!-- Right -->
        <div>
          <a href="{{ $pengaturan[0]->fb}}" class="text-white text-decoration-none me-4">
            <i class="fab fa-facebook"></i>
          </a>
          <a href="{{ $pengaturan[0]->twitter}}" class="text-white text-decoration-none me-4">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="text-white text-decoration-none me-4">
            <i class="fab fa-google"></i>
          </a>
          <a href="{{ $pengaturan[0]->instagram}}" class="text-white text-decoration-none me-4">
            <i class="fab fa-instagram"></i>
          </a>
          </a>
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->
  
      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold">SMK 5 Pandan Wangi</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px"/>
              <p>
                Here you can use rows and columns to organize your footer
                content. Lorem ipsum dolor sit amet, consectetur adipisicing
                elit.
              </p>
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Menu Utama</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
                  @foreach ($programs as $program)
              <p>
                <a href="#{{ $program->slug }}" class="text-dark">{{ $program->jenis_program->nama_jenis }}</a>
              </p>
              
                  @endforeach
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Useful links</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p>
                <a href="#!" class="text-dark">Your Account</a>
              </p>
              <p>
                <a href="#!" class="text-dark">Become an Affiliate</a>
              </p>
              <p>
                <a href="#!" class="text-dark">Shipping Rates</a>
              </p>
              <p>
                <a href="#!" class="text-dark">Help</a>
              </p>
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Contact</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p><i class="fas fa-home mr-3"></i> {{ $pengaturan[0]->alamat}}</p>
              <p><i class="fas fa-envelope mr-3"></i> {{ $pengaturan[0]->email}}</p>
              <p><i class="fas fa-phone mr-3"></i> {{ $pengaturan[0]->no_hp}}</p>
              <p><i class="fas fa-print mr-3"></i> + 083898518650</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->
  
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2020 Copyright:
        <a class="text-dark text-decoration-none" href="#">nyoba-nyoba</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
    </div> 
  <!-- End of .container -->

    <style>
        #aktivitas .slick-prev:before,
        #aktivitas.slick-next:before {
        color: black;
        }

        #sponsor .slick-prev:before,
        .slick-next:before {
        color: white;
        }

    </style>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    
    <script src="{{ asset('frontend/bs5/dist/js/bootstrap.bundle.min.js')}}"></script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend/slick/slick.min.js')}}"></script>
                    
    <script src="{{ asset('frontend/js/onscroll.js')}}"></script>

    <script>
    $('.slider').slick({
	  lazyLoad: 'ondemand',
	  slidesToShow: 4,
	  slidesToScroll: 1
	});

    $('.slidersuc').slick({
	  lazyLoad: 'ondemand',
	  slidesToShow: 2,
	  slidesToScroll: 1
	});

    $('.slider2').slick({
	  lazyLoad: 'ondemand',
	  slidesToShow: 5,
	  slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
	});

    </script>
</body>

</html>