@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Data All section</h1>
    </div>

    @if (session()->has('berhasil'))
        <div class="alert alert-success col-lg-9" role="alert">
        {{ session('berhasil') }}
      </div>
    @endif

    <div class="table-responsive col-lg-9">
        <a href="/dashboard/programs/create" class="btn btn-sm btn-primary mb-3">Tambah Section Baru</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Section</th>
              {{-- <th scope="col">Keterangan</th> --}}
              <th scope="col">Jenis</th>
              <th scope="col">Status Navbar</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
          @if ($programs->count())
            @foreach ($programs as $program)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $program->nama_program }}</td>
                {{-- <td><img src="{{ asset('storage/'.$program->foto) }}" alt="">/td> --}}
                <td>{{ $program->jenis_program->nama_jenis }}</td>
                <td>
                  @if ($program->status == 0)
                    <span class="badge bg-secondary" style="margin: 0px;">Tidak Aktif!</span>
                  @else
                  <span class="badge bg-success">Aktif!</span>
                  @endif
                
                </td>
                <td>
                  @if ($program->status == "1")
                    <form action="/dashboard/programs/status/{{ $program->slug }}" method="post" class="d-inline">
                    <input type="hidden" name="status" value="0">
                    @method('put')
                    @csrf
                    <button class="badge bg-secondary border-0" onclick="return confirm('yakin Menonaktifkan data?')" title="Nonaktifkan Menu Navbar"><i class="fas fa-times-circle"></i></button>
                    </form>
                  @else  
                    <form action="/dashboard/programs/status/{{ $program->slug }}" method="post" class="d-inline">
                    <input type="hidden" name="status" value="1">
                    @method('put')
                    @csrf
                    <button class="badge bg-success border-0" onclick="return confirm('yakin Mengaktifkan data?')" title="Aktifkan Menu Navbar"><i class="fas fa-check"></i></button>
                    </form>
                  @endif
                    {{-- <a href="/dashboard/programs/{{ $program->slug }}" class="badge bg-info"><i class="fas fa-eye"></i></a> --}}
                    <a href="/dashboard/programs/{{ $program->slug }}" class="badge bg-warning" title="ubah data"><i class="fas fa-edit"></i></a>
                    <form action="/dashboard/programs/delete/{{ $program->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('yakin menghapus data?')" title="hapus data"><i class="fas fa-trash"></i></button>
                    </form>
                    
                </td>
            </tr> 
            @endforeach
          @else 
            <tr>
              <td colspan="5" class="text-center">Tidak ADA DATA</td>
            </tr>
          @endif
          </tbody>
        </table>
      </div>
      <div class="d-flex justify-content-end">
        {{ $programs->links() }}
        </div>
@endsection