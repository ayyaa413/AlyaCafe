@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h1 class="text-gray">Admin Dashboard</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Cafe</h5>
                    <p class="card-text">{{ $jumlahCafe }}</p>
                </div>
            </div>
        </div>
        <!-- Tambahkan lebih banyak kartu untuk data lainnya jika diperlukan -->
    </div>
</div>
@endsection
