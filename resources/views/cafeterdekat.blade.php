<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cafe Terdekat - Cari Caffe Yuk</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .fakeimg {
      height: 200px;
      background: #aaa;
    }
    .carousel-item img {
      max-width: 100%;
      height: auto;
    }
  </style>
</head>
<body>

<div class="p-5 text-white text-center" style="background-color:gray;">
  <h1>Cafe Terdekat</h1>
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
          <a class="nav-link active" href="/cafeterdekat">Cafe Terdekat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/reviewcafe">Review</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tentang">Tentang</a>
        </li>
      </ul>
      <form class="d-flex ms-auto my-2 my-lg-0" role="search">
        <input class="form-control me-2" type="search" placeholder="Cari Cafe..." aria-label="Search">
        <button class="btn btn-outline-l  ight" type="submit">Cari</button>
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
  <h2 class="mb-4 text-center">Cafe Terdekat dari Lokasi Anda</h2>
  <div class="row">
    <!-- Existing Cafes -->
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card">
        <img src="https://i.pinimg.com/564x/4b/87/59/4b8759839602d5e82d23d9d1bfa1ac58.jpg" class="card-img-top" alt="Cafe Harmoni">
        <div class="card-body">
          <h5 class="card-title">Cafe Harmoni</h5>
          <p class="card-text">Jarak: 1.2 km</p>
          <p class="card-text">Cafe dengan suasana yang tenang dan nyaman, cocok untuk bekerja atau bersantai bersama teman.</p>
          <a href="#" class="btn btn-primary">Lihat Detail</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card">
        <img src="https://i.pinimg.com/564x/3f/2b/fd/3f2bfd217e1be00c24ce3fbaf2e5a1dd.jpg" class="card-img-top" alt="Cafe Aroma">
        <div class="card-body">
          <h5 class="card-title">Cafe Aroma</h5>
          <p class="card-text">Jarak: 2.5 km</p>
          <p class="card-text">Menawarkan kopi spesial yang diseduh dengan biji kopi pilihan dari berbagai daerah di Indonesia.</p>
          <a href="#" class="btn btn-primary">Lihat Detail</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card">
        <img src="https://i.pinimg.com/564x/33/9a/96/339a9684bfeacf80ba1973502167dbcc.jpg" class="card-img-top" alt="Cafe Nostalgia">
        <div class="card-body">
          <h5 class="card-title">Cafe Nostalgia</h5>
          <p class="card-text">Jarak: 3.0 km</p>
          <p class="card-text">Tempat yang sempurna untuk menikmati suasana klasik dan menu kopi tradisional.</p>
          <a href="#" class="btn btn-primary">Lihat Detail</a>
        </div>
      </div>
    </div>

    <!-- New Cafes -->
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card">
        <img src="https://i.pinimg.com/564x/65/55/29/655529bddeb04e9df433de106a48dac0.jpg" class="card-img-top" alt="Coffee Delight">
        <div class="card-body">
          <h5 class="card-title">Coffee Delight</h5>
          <p class="card-text">Jarak: 2.0 km</p>
          <p class="card-text">Tempat dengan varian kopi lengkap, mulai dari espresso hingga cold brew.</p>
          <a href="#" class="btn btn-primary">Lihat Detail</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card">
        <img src="https://i.pinimg.com/564x/5a/44/59/5a4459bb228959af83eceae7eb7dda45.jpg" class="card-img-top" alt="The Coffee House">
        <div class="card-body">
          <h5 class="card-title">The Coffee House</h5>
          <p class="card-text">Jarak: 3.5 km</p>
          <p class="card-text">Cafe dengan desain interior minimalis dan menu kopi berkualitas tinggi.</p>
          <a href="#" class="btn btn-primary">Lihat Detail</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card">
        <img src="https://i.pinimg.com/564x/6e/f4/c2/6ef4c23ee6f22fa06140ebb107ebc4de.jpg" class="card-img-top" alt="Brew Lab">
        <div class="card-body">
          <h5 class="card-title">Brew Lab</h5>
          <p class="card-text">Jarak: 4.0 km</p>
          <p class="card-text">Tempat sempurna untuk pecinta kopi dengan racikan unik dan inovatif.</p>
          <a href="#" class="btn btn-primary">Lihat Detail</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-5">
  <h2 class="mb-4 text-center">Temukan Cafe Terdekat</h2>
  <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="https://maps.google.com/maps?q=Tasikmalaya,Jawa+Barat&output=embed" style="width:100%; height:400px;" frameborder="0"></iframe>
  </div>
</div>


</body>
</html>
