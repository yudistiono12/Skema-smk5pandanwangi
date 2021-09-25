{{-- {{ dd($jenis_programs) }} --}}
@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data </h1>
        
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/success/edit/{{ $succes->id }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <input type="hidden" name="jenis_konten_id" value="{{ $succes->jenis_konten_id }}">
            <div class="mb-3">
                <label for="nama_konten" class="form-label">Nama Success story</label>
                <input type="text" name="nama_konten" class="form-control @error('nama_konten') is-invalid @enderror" id="nama_konten" autofocus value="{{ old('nama_konten', $succes->nama_konten) }}" >
                @error('nama_konten')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" value="{{ old('slug', $succes->slug) }}">
                @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select @error('status') is-invalid @enderror" name="status" id="status">
                    @if (old('status', $succes->status) == 1)
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
                <input type="hidden" name="fotolama" value="{{ $succes->foto }}"> 
                @if ($succes->foto)
                    <img src="{{ asset('storage/'.$succes->foto) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-5">    
                @endif
                <input class="form-control @error('status') is-invalid @enderror" type="file" id="foto" name="foto" value="{{  old('foto')  }}" onchange="previewImage()">
                @error('foto')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                @error('keterangan')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="keterangan" type="hidden" name="keterangan" value="{{ old('keterangan', $succes->keterangan) }}">
                <trix-editor input="keterangan"></trix-editor>
                @error('keterangan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>  
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script>
        const nama_konten = document.querySelector('#nama_konten');
        const slug = document.querySelector('#slug');

        nama_konten.addEventListener('change', function() {
            fetch('/dashboard/success/checkSlug?nama_konten=' + nama_konten.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        }) //matikan tombol upload file


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