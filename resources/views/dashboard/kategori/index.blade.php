@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Data Kategori</h1>
    </div>

    @if (session()->has('berhasil'))
        <div class="alert alert-success col-lg-9" role="alert">
        {{ session('berhasil') }}
      </div>
    @endif

    <div class="table-responsive col-lg-9">
        <a href="/dashboard/programs/create" class="btn btn-sm btn-primary mb-3">Tambah Kategori Baru</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Kategori</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
          @if ($kategoris->count())
            @foreach ($kategoris as $kategori)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $kategori->nama }}</td>
                <td>
                    <a href="/dashboard/programs/{{ $kategori->id }}" class="badge bg-warning" title="ubah data"><i class="fas fa-edit"></i></a>
                    <form action="/dashboard/kategoris/delete/{{ $kategori->id }}" method="post" class="d-inline">
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
        {{ $kategoris->links() }}
        </div>
@endsection