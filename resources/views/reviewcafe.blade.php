<!DOCTYPE html>
<html lang="en">
<head>
  <title>Review Cafe - Cari Caffe Yuk</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .carousel-item img {
      max-width: 100%;
      height: auto;
    }
    .review-box {
      background-color: #f8f9fa;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 10px;
    }
    .review-header {
      font-weight: bold;
      font-size: 18px;
    }
    .review-content {
      margin-top: 10px;
    }
    .rating {
      color: #f39c12;
    }
  </style>
</head>
<body>

<div class="p-5 text-white text-center" style="background-color:gray;">
  <h1>Review Cafe</h1>
</div>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(165, 164, 164); color: aliceblue;"> 
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">CAFETRACKER</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 13%;">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/home">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/cafeterdekat">Cafe Terdekat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/reviewcafe">Review</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tentang">Tentang</a>
        </li>
      </ul>
      <form class="d-flex ms-auto my-2 my-lg-0" role="search">
        <input class="form-control me-2" type="search" placeholder="Cari Cafe..." aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Cari</button>
      </form>
      <ul class="navbar-nav ms-2">
        <li class="nav-item">
          <button class="btn btn-dark" type="submit">Login</button>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5">
  <h2 class="mb-4 text-center">Ulasan Terbaru dari Pengunjung</h2>
  <div class="row">
    <div class="col-lg-6 mb-4">
      <div class="review-box">
        <div class="review-header">
          <span class="rating">★★★★☆</span> - Cafe Harmoni
        </div>
        <div class="review-content">
          <p>Cafe Harmoni adalah tempat yang sempurna untuk bersantai dengan teman-teman. Suasananya tenang, dan kopinya sangat nikmat. Sangat direkomendasikan untuk yang suka kerja di cafe.</p>
          <p class="text-muted"><small>Ditulis oleh: John Doe, 1 hari yang lalu</small></p>
        </div>
      </div>
    </div>
    <div class="col-lg-6 mb-4">
      <div class="review-box">
        <div class="review-header">
          <span class="rating">★★★★★</span> - Cafe Aroma
        </div>
        <div class="review-content">
          <p>Cafe Aroma memiliki pilihan kopi yang luar biasa. Saya sangat menyukai espresso mereka yang dibuat dengan biji kopi lokal. Stafnya juga ramah dan tempatnya nyaman.</p>
          <p class="text-muted"><small>Ditulis oleh: Jane Smith, 2 hari yang lalu</small></p>
        </div>
      </div>
    </div>
    <div class="col-lg-6 mb-4">
      <div class="review-box">
        <div class="review-header">
          <span class="rating">★★★☆☆</span> - Cafe Nostalgia
        </div>
        <div class="review-content">
          <p>Suasananya cukup klasik, tapi pelayanan bisa lebih baik lagi. Makanan dan minuman cukup enak, tapi tidak terlalu istimewa.</p>
          <p class="text-muted"><small>Ditulis oleh: Michael Lee, 3 hari yang lalu</small></p>
        </div>
      </div>
    </div>
    <div class="col-lg-6 mb-4">
      <div class="review-box">
        <div class="review-header">
          <span class="rating">★★★★☆</span> - Cafe Nostalgia
        </div>
        <div class="review-content">
          <p>Saya suka dengan dekorasi klasik di Cafe Nostalgia. Menu kopi tradisionalnya mengingatkan saya pada masa kecil. Tempat yang cocok untuk berkumpul dengan keluarga.</p>
          <p class="text-muted"><small>Ditulis oleh: Sarah Ahmad, 4 hari yang lalu</small></p>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
