@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Tambah Rekomendasi Cafe Baru</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
   <form action="{{ route('admin.cafe.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

        <div class="form-group mb-3">
            <label for="nama">Nama Cafe</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama cafe" required>
        </div>

        <div class="form-group mb-3">
            <label for="deskripsi">Deskripsi Cafe</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Masukkan deskripsi cafe" required></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="lokasi">Lokasi</label>
            <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Masukkan lokasi cafe" required>
        </div>
        <div class="form-group mb-3">
            <label for="gambar">Upload Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar">
            {{-- @if (isset($cafe) && $cafe->image) --}}
                {{-- <img src="{{ asset('storage/public/images'.$cafe->image) }}" alt="Gambar" width="100"> --}}
            {{-- @endif --}}
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <input type="number" class="form-control" id="rating" name="rating" placeholder="Masukkan rating kafe (0-5)" step="0.1" max="5" min="0" required>
        </div>

        <button type="submit" class="btn btn-primary">Tambah Cafe</button>
    </form>
</div>
@endsection
