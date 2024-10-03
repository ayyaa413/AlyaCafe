@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h1>Daftar Rekomendasi Cafe</h1>
    <a href="{{ route('admin.cafe.create') }}" class="btn btn-primary mb-3">Tambah Cafe</a>
    @if ($message = Session::get('success'))
    <div class="alert alert-success mt-3">{{ $message }}</div>
@endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Lokasi</th>
                <th>Gambar</th>
                <th>Rating</th> 
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cafes as $cafe)
            <tr>
                <td>{{ $cafe->nama }}</td>
                <td>{{ $cafe->deskripsi }}</td>
                <td>{{ $cafe->lokasi }}</td>
                <td><img src="{{ asset('storage/cafe_images/'.$cafe->gambar) }}" width="100"></td>
                <td>{{ $cafe->rating }}</td> 
                <td>
                    <a href="{{ route('admin.cafe.edit', $cafe->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.cafe.destroy', $cafe->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus produk ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>        
    </table>
</div>
@endsection
