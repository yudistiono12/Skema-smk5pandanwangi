{{-- {{ dd($jenis_programs) }} --}}
@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Data Baru</h1>
        
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/programs/store" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama_program" class="form-label">Nama Section</label>
                <input type="text" name="nama_program" class="form-control @error('nama_program') is-invalid @enderror" id="nama_program" required autofocus value="{{ old('nama_program') }}">
                @error('nama_program')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" value="{{ old('slug') }}">
                @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jenis_id" class="form-label">Jenis Section </label>
                @if ($jenis_programs->isEmpty())
                        <p class="text-danger">Tidak ada data Tambahkan dulu jenis program</p>
                @else
                    <select class="form-select @error('jenis_id') is-invalid @enderror" name="jenis_id" id="jenis_id">
                        @foreach ($jenis_programs as $jenis_program)
                            @if (old('jenis_id') == $jenis_program->id)
                                <option value="{{ $jenis_program->id }}" selected>{{ $jenis_program->nama_jenis }}</option>
                            @else 
                                <option value="{{ $jenis_program->id }}">{{ $jenis_program->nama_jenis }}</option>
                            @endif
                        @endforeach    
                    </select>
                @endif
                @error('jenis_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status Sebagai Navbar</label>
                <select class="form-select @error('status') is-invalid @enderror" name="status" id="status">
                    @if (old('status') == 1)
                        <option value="1" selected>Ditampilkan Sebagai Navbar</option>
                        <option value="0">Tidak Ditampilkan</option> 
                    @else
                        <option value="0">Tidak Ditampilkan</option>   
                        <option value="1">Ditampilkan Sebagai Navbar</option>   
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
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                @error('keterangan')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="keterangan" type="hidden" name="keterangan" value="{{ old('keterangan') }}">
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
        const nama_program = document.querySelector('#nama_program');
        const slug = document.querySelector('#slug');

        nama_program.addEventListener('change', function() {
            fetch('/dashboard/programs/checkSlug?nama_program=' + nama_program.value)
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