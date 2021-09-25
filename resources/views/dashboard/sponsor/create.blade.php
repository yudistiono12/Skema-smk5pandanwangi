{{-- {{ dd($jenis_programs) }} --}}
@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Data Baru</h1>
        
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/sponsors/store" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Sponsor</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" autofocus value="{{ old('nama') }}" >
                @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select @error('status') is-invalid @enderror" name="status" id="status">
                    @if (old('status') == 1)
                        <option value="1" selected>Aktif</option>
                        <option value="0">Tidak Aktif</option> 
                    @else
                        <option value="0">Tidak Aktif</option>   
                        <option value="1">Aktif</option>   
                    @endif      
                </select>
                @error('status')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control @error('status') is-invalid @enderror" type="file" id="foto" name="foto" value="{{  old('foto')  }}" onchange="previewImage()">
                @error('foto')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
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