<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cari Cafe Yuk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .carousel-item img {
      width: 100%;
      height: auto;
    }
    .card-img-top {
      height: 200px;
      object-fit: cover;
    }
    footer {
      background-color: grey;
      color: white;
      padding: 20px;
      margin-top: 50px;
    }
  </style>
</head>
<body>

<!-- Header -->
<header class="bg-dark text-white text-center py-5">
  <h1>CAFETRACKER</h1>
</header>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <div class="container">
    <a class="navbar-brand text-white" href="#">CAFETRACKER</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link text-white" href="/home">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/cafeterdekat">Cafe Terdekat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/reviewcafe">Review</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/tentang">Tentang</a>
        </li>
      </ul>
      <form class="d-flex ms-auto" role="search">
        <input class="form-control me-2" type="search" placeholder="Cari Cafe..." aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Cari</button>
      </form>
      <a href="/" class="btn btn-dark ms-2">Login</a>
    </div>
  </div>
</nav>

<!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide mt-4">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://awsimages.detik.net.id/community/media/visual/2023/11/13/third-space-tempat-nongkrong-baru-di-kota-bandung-1_169.jpeg?w=1200" class="d-block" alt="Banner 1">
    </div>
  </div>
</div>

<!-- Cafe Recommendations -->
<div class="container mt-5">
  <h2 class="text-center mb-4">Rekomendasi Tempat Cafe Terbaik</h2>
  <div class="row">
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card">
        <img src="https://i.pinimg.com/736x/e0/c3/9f/e0c39f9cb79f75035d81a2e10586da10.jpg" class="card-img-top" alt="Cafe Harmoni">
        <div class="card-body">
          <h5 class="card-title">Notre Socielle</h5>
          <p class="card-text">Cafe dengan suasana yang tenang dan nyaman, cocok untuk bekerja atau bersantai bersama teman.</p>
          <p class="card-text"><small class="text-muted">Jl. Cimulu No.32, Kab. Tasikmalaya</small></p>
          <a href="/detailcafe" class="btn btn-primary">Lihat Detail</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card">
        <img src="https://i.pinimg.com/564x/56/55/54/56555475dba1e5e9a91092a2beca668c.jpg" class="card-img-top" alt="Cafe Aroma">
        <div class="card-body">
          <h5 class="card-title">Coffeed-19</h5>
          <p class="card-text">Menawarkan kopi spesial yang diseduh dengan biji kopi pilihan dari berbagai daerah di Indonesia.</p>
          <p class="card-text"><small class="text-muted">Jl Dozer No.19, Kec. Singaparna, Kab Tasikmalaya</small></p>
          <a href="#" class="btn btn-primary">Lihat Detail</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card">
        <img src="https://i.pinimg.com/564x/02/ae/44/02ae44a134fb7243d81ae7806c2ec4fd.jpg" class="card-img-top" alt="Cafe Nostalgia">
        <div class="card-body">
          <h5 class="card-title">Domo.id Coffee</h5>
          <p class="card-text">Tempat yang sempurna untuk menikmati suasana klasik dan menu kopi tradisional.</p>
          <p class="card-text"><small class="text-muted">Jl Tugujaya, Kab. Tasikmalaya</small></p>
          <a href="#" class="btn btn-primary">Lihat Detail</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Testimonials -->
<div class="container mt-5">
  <h2 class="text-center mb-4">Apa Kata Mereka Tentang Kami?</h2>
  <div class="row">
    <div class="col-lg-4 mb-4">
      <div class="card">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>Tempat yang nyaman dan kopinya enak! Saya sangat menikmati waktu saya di Cafe Aroma.</p>
            <footer class="blockquote-footer">Jane Smith di <cite title="Cafe Aroma">Notre Socielle</cite></footer>
          </blockquote>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>Cafe Nostalgia memiliki suasana klasik yang membuat saya merasa seperti kembali ke masa lalu.</p>
            <footer class="blockquote-footer">Michael Lee di <cite title="Cafe Nostalgia">Coffeed-19</cite></footer>
          </blockquote>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>Rekomendasi terbaik untuk bekerja sambil menikmati secangkir kopi, suasana di Cafe Harmoni sangat tenang.</p>
            <footer class="blockquote-footer">John Doe di <cite title="Cafe Harmoni">Domo.id Coffee</cite></footer>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- More Cafes -->
<div class="container mt-5">
  <h2 class="text-center mb-4">Lihat Lebih Banyak Cafe Lagi Yuk</h2>
  <div class="row">
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card">
        <img src="https://i.pinimg.com/564x/ed/2b/74/ed2b7496c6745d9f57c23fad74c86ec9.jpg" class="card-img-top" alt="Cafe Harmoni">
        <div class="card-body">
          <h5 class="card-title">Notre Socielle</h5>
          <p class="card-text">Cafe dengan suasana yang tenang dan nyaman, cocok untuk bekerja atau bersantai bersama teman.</p>
          <p class="card-text"><small class="text-muted">Jl. Cimulu No.32, Kab. Tasikmalaya</small></p>
          <a href="/detailcafe" class="btn btn-primary">Lihat Detail</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card">
        <img src="https://i.pinimg.com/564x/44/5f/bf/445fbfd79df46eb26160872fcae5cdb5.jpg" class="card-img-top" alt="Cafe Aroma">
        <div class="card-body">
          <h5 class="card-title">Coffeed-
