@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h1>Edit Cafe</h1>
    <form action="{{ route('admin.cafe.update', $cafe->id) }} " method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Cafe</label>
            <input type="text" class="form-control" name="nama" value="{{ $cafe->nama }}" required>
        </div>
        
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" rows="3" value="{{ $cafe->deskripsi }}" required></textarea>
        </div>
        
        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <input type="text" class="form-control" name="lokasi" value="{{ $cafe->lokasi }}" required>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" class="form-control" name="gambar">
            {{-- @if(isset($cafe) && $cafe->image) --}}
                <img src="{{ asset('storage/cafe_images/'.$cafe->gambar) }}" width="100" class="mt-2">
            {{-- @endif --}}
        </div>
        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <input type="number" class="form-control" id="rating" name="rating" placeholder="Masukkan rating kafe (0-5)" step="0.1" max="5" min="0" value="{{ $cafe->rating}}" required>
        </div>

        <button type="submit" class="btn btn-success">Update Cafe</button>
    </form>
</div>
@endsection

