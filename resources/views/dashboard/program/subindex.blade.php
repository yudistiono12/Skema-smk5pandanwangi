{{-- {{ dd($details) }} --}}
@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Section {{ $datas[0]->jenis_program->nama_jenis }}</h1>
    </div>

    @if (session()->has('berhasil'))
        <div class="alert alert-success col-lg-9" role="alert">
        {{ session('berhasil') }}
      </div>
    @endif
    
    @if ($datas[0]->jenis_program->id === 1)
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2>Kenapa harus Skema ?</h2>
            <p class="font-warna2 text-center">
                <input id="keterangan" type="hidden" name="keterangan" value="{{ old('keterangan', $datas[0]->keterangan) }}">
                <trix-editor input="keterangan"></trix-editor>
            </p>
            <!-- <div class="position-absolute"></div> -->
            
            <div class="row">
                <div class="col-md-3 col-lg-3 col-12 ">
                    <div class="icon-block ">
                        <div class="bg-color-1 icon-block-img m-0 text-info">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <div class="icon-block-info">
                            <h3>Fasilitas Lengkap</h3>
                            <p class="font-warna2 text-center">Penunjang belajar dengan kualitas premium.</p>                                        
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-12">
                    <div class="icon-block">
                        <div class=" bg-color-2 icon-block-img m-0 text-warning">
                            <i class="fas fa-school"></i>
                        </div>
                        <div class="icon-block-info">
                            
                            <h3>Lingkungan Nyaman</h3>
                            <p class="font-warna2 text-center">Berada di lingkungan yang asri, aman, dan kondusif.</p>
                                
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-12"> 
                <div class="icon-block">
                    <div class=" bg-color-3 icon-block-img m-0 text-danger">
                        <i class="fa fa-chalkboard-teacher"></i>
                    </div>
                    <div class="icon-block-info">
                        <h3>Pengajar Kompeten</h3>
                        <p class="font-warna2 text-center">Guru yang <i>up-to-date</i> dengan perkembangan industri.</p>                                            
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-12">
                <div class="icon-block">
                    <div class=" bg-color-7 icon-block-img m-0 text-secondary">
                        <i class="fa fa-building"></i>
                    </div>
                    <div class="icon-block-info">
                        <h3>Kerjasama Luas</h3>
                        <p class="font-warna2 text-center">Memperbesar kesempatan bekerja sebelum lulus.</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    @endif

    @if($datas[0]->jenis_program->id === 2)
    <div class="table-responsive col-lg-9">
        <a href="/dashboard/programs/create" class="btn btn-sm btn-primary mb-3">Tambah Section Baru</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
                <td>sdfsfs</td>
            </tr>
          </thead>
        </table>
    </div> 
    @endif
@endsection