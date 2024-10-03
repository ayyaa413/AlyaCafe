<!DOCTYPE html>
<html lang="en">
<head>
  <title>Detail Cafe - Cari Caffe Yuk</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .fakeimg {
      height: 200px;
      background: #aaa;
    }
  </style>
</head>
<body>

<div class="p-5 text-white text-center" style="background-color:gray;">
  <h1>Detail Cafe</h1>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(165, 164, 164); color: aliceblue;"> 
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">CAFETRACKER</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 50%;">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/home">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/cafeterdekat">Cafe Terdekat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/reviewcafe">Review</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tentang">Tentang</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
      <img src="https://i.pinimg.com/736x/e0/c3/9f/e0c39f9cb79f75035d81a2e10586da10.jpg" class="img-fluid" alt="Cafe Harmoni">
    </div>
    <div class="col-md-6">
      <h2>Notre Socielle</h2>
      <p>Cafe dengan suasana yang tenang dan nyaman, cocok untuk bekerja atau bersantai bersama teman.</p>
      <ul class="list-group">
        <li class="list-group-item"><strong>Alamat         : </strong>Jl. Cimulu No.32, Kab. Tasikmalaya</li>
        <li class="list-group-item"><strong>Jam Operasional: </strong> 08:00 - 22:00</li>
        <li class="list-group-item"><strong>No. Telepon    : </strong> (021) 12345678</li>
      </ul>
    </div>
  </div>
  <div class="mt-5">
    <h3>Menu</h3>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nama Menu</th>
          <th>Harga</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Espresso</td>
          <td>Rp 25.000</td>
        </tr>
        <tr>
          <td>Latte</td>
          <td>Rp 30.000</td>
        </tr>
        <tr>
          <td>Cappuccino</td>
          <td>Rp 28.000</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="mt-5">
    <h3>Review Pengguna</h3>
    @foreach ($reviews as $review)
      <div class="mb-3">
        <strong>{{ $review->name }}:</strong>
        <span class="text-muted">"{{ $review->review }}"</span>
      </div>
    @endforeach
    <form action="{{ route('reviews.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="mb-3">
        <label for="review" class="form-label">Tambahkan Review</label>
        <textarea class="form-control" id="review" name="review" rows="3" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Kirim Review</button>
    </form>
  </div>
</div>

</body>
</html>
