
@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Pengaturan Website</h1>
    </div>

    @if (session()->has('berhasil'))
        <div class="alert alert-success col-lg-9" role="alert">
        {{ session('berhasil') }}
      </div>
    @endif
    <form method="post" action="/dashboard/pengaturan/edit/{{ $pengaturan[0]->id }}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row">
        
            <div class="col-lg-6 card">
                <div class="mb-3 mt-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Website</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $pengaturan[0]->nama)}}" >
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="moto" class="col-sm-2 col-form-label">Moto</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="moto" name="moto" value="{{ old('moto', $pengaturan[0]->moto)}}" >
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="detailmoto" class="col-sm-2 col-form-label">Detail Moto</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="detailmoto" name="detailmoto" value="{{ old('detailmoto', $pengaturan[0]->detailmoto)}}" >
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="no_hp" class="col-sm-2 col-form-label">No Hp</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ old('no_hp', $pengaturan[0]->no_hp)}}" >
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat', $pengaturan[0]->alamat)}}" >
                    </div>
                </div>
            </div>
            <div class="col-lg-6 card">
                <div class="mb-3 mt-3 row">
                    <label for="email" class="col-sm-2 col-form-label">email</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" value="{{ old('email', $pengaturan[0]->email)}}" >
                    </div>
                </div>
                <div class="mb-3 mt-3 row">
                    <label for="fb" class="col-sm-2 col-form-label">Facebook</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="fb" name="fb" value="{{ old('fb', $pengaturan[0]->fb)}}" >
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="twitter" class="col-sm-2 col-form-label">Twitter</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="twitter" name="twitter" value="{{ old('twitter', $pengaturan[0]->twitter)}}" >
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="instagram" name="instagram" value="{{ old('instagram', $pengaturan[0]->instagram)}}" >
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="video_profile" class="col-sm-2 col-form-label">Video Profil(Yt )</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="video_profile" name="video_profile" value="{{ old('video_profile', $pengaturan[0]->video_profile)}}" >
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <label for="foto" class="form-label">Foto</label>
                <input type="hidden" name="fotolama" value="{{ $pengaturan[0]->foto }}"> 
                    @if ($pengaturan[0]->foto)
                        <img src="{{ asset('storage/'.$pengaturan[0]->foto) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                    @else
                        <img class="img-preview img-fluid mb-3 col-sm-5">    
                    @endif
                    <input class="form-control @error('status') is-invalid @enderror" type="file" id="foto" name="foto" onchange="previewImage()">
            </div>
            <div class="col-lg-2 offset-3 mt-5">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </div>
    </form>
    <script>
        function previewImage() {
            const foto = document.querySelector('#foto');
            const fotoPreview = document.querySelector('.img-preview');

            fotoPreview.style.display = 'block';
            
            const oFReader = new FileReader();
            oFReader.readAsDataURL(foto.files[0]);

            oFReader.onload = function(oFREvent) {
                fotoPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection