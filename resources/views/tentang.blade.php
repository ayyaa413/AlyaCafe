<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tentang Kami - CafeTracker</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .content-section {
      padding: 50px 0;
    }

    .mission-section {
      background-color: #f8f9fa;
      padding: 30px;
      border-radius: 10px;
    }

    .vision-section {
      background-color: #e9ecef;
      padding: 30px;
      border-radius: 10px;
    }

    .card:hover {
      transform: scale(1.05);
      transition: transform 0.3s ease-in-out;
    }
  </style>
</head>
<body>

<div class="p-5 text-white text-center" style="background-color: grey;">
  <h1>Tentang CafeTracker</h1>
</div>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(165, 164, 164); color: aliceblue;">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">CAFETRACKER</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
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
          <a class="nav-link active" href="/tentang">Tentang</a>
        </li>
      </ul>
      <form class="d-flex ms-auto" role="search">
        <input class="form-control me-2" type="search" placeholder="Cari Cafe..." aria-label="Search">
        <a href="/search" button class="btn btn-outline-light" type="submit">Cari</button></a>
      </form>
    </div>
  </div>
</nav>

<div class="container content-section mt-5">
  <h2 class="text-center mb-5">Siapa Kami?</h2>
  <div class="row justify-content-center">
    <div class="col-lg-10 text-center">
      <p>
        CafeTracker adalah platform yang dirancang untuk membantu Anda menemukan kafe terbaik di sekitar Anda. 
        Kami percaya bahwa setiap kafe memiliki cerita dan pengalaman unik untuk ditawarkan, baik itu tempat untuk bersantai, bekerja, 
        ataupun berkumpul dengan teman-teman.
      </p>
      <p>
        Kami mengumpulkan informasi mengenai kafe-kafe lokal, mulai dari ulasan, rekomendasi, hingga menu spesial yang ditawarkan. 
        Dengan begitu, Anda bisa menemukan tempat yang paling sesuai dengan suasana hati dan kebutuhan Anda.
      </p>
    </div>
  </div>
</div>
<div class="container content-section">
  <div class="row justify-content-center">
    <div class="col-lg-5 mb-4">
      <div class="mission-section">
        <h3>Misi Kami</h3>
        <p>
          Menyediakan platform yang mudah digunakan bagi para pecinta kopi dan penggemar kafe untuk menemukan tempat favorit mereka, 
          berbagi ulasan, dan menciptakan pengalaman yang tak terlupakan di setiap kunjungan ke kafe.
        </p>
      </div>
    </div>
    <div class="col-lg-5 mb-4">
      <div class="vision-section">
        <h3>Visi Kami</h3>
        <p>
          Menjadi platform terdepan dalam menghubungkan komunitas pecinta kopi dengan kafe-kafe terbaik, 
          menciptakan lingkungan di mana setiap kunjungan menjadi momen yang berkesan.
        </p>
      </div>
    </div>
  </div>
</div>

<div class="container content-section">
  <h2 class="text-center mb-5">Tim Kami</h2>
  <div class="row justify-content-center">
    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card">
        <img src="" class="card-img-top" alt="Founder Image">
        <div class="card-body">
          <h5 class="card-title">Alya Devika</h5>
          <p class="card-text">Pembuat website</p>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="text-center text-white" style="background-color: grey; padding: 20px; margin-top: 50px;">
  <div class="container">
    <p>&copy; 2024 CafeTracker. All Rights Reserved.</p>
    <p>Contact us: info@cafetracker.com</p>
  </div>
</footer>

</body>
</html>
