<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cari Caffe Yuk</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .fakeimg {
      height: 200px;
      background: #aaaaaa;
    }

    .carousel-item img {
   max-width: 100%;
   height: auto;
    }

    .card:hover {
    transform: scale(1.05);
    transition: transform 0.2s ease-in-out;
    }
    @media (max-width: 768px) {
    .carousel-item img {
        height: 250px;
    }
}



  </style>
</head>
<body>

  <div class="p-5 text-white text-center" style="background-color: grey;">
    <h1>CAFETRACKER</h1>
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
          <a class="nav-link active" aria-current="page" href="/home">Beranda</a>
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
      <form class="d-flex ms-auto my-2 my-lg-0" method="GET" action="search.php">
        <input class="form-control me-2" name="query" type="search" placeholder="Cari Cafe..." aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Cari</button>
      </form>      
    </div>
  </div>
</nav>

<div class="container-fluid"></div>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" style="margin-top: 3%; margin-top: 0%;">
      <div class="carousel-item active">
        <img src="https://awsimages.detik.net.id/community/media/visual/2023/11/13/third-space-tempat-nongkrong-baru-di-kota-bandung-1_169.jpeg?w=1200" class="d-block w-80" alt="Banner 1" style="width: 1290px; height: 500px; margin-top: 2%; margin-left: 1%;">
      </div>
    </div>
  </div>
<div class="container mt-5">
  <h2 class="mb-4 text-center">Rekomendasi Tempat Cafe Terbaik</h2>
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
          <p class="card-text"><small class="text-muted">Jl Dozer No.19,Kec. Singaparna, Kab Tasikmalaya</small></p>
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
<div class="container mt-5">
  <h2 class="mb-4 text-center">Apa Kata Mereka Tentang Kami?</h2>
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
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="grey" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,138.7C672,149,768,203,864,197.3C960,192,1056,128,1152,112C1248,96,1344,128,1392,144L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
  <div class="container mt-5">
    <h2 class="mb-4 text-center">Lihat Lebih Banyak Cafe Lagi Yuk</h2>
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4">
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
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
          <img src="https://i.pinimg.com/564x/44/5f/bf/445fbfd79df46eb26160872fcae5cdb5.jpg" class="card-img-top" alt="Cafe Aroma">
          <div class="card-body">
            <h5 class="card-title">Coffeed-19</h5>
            <p class="card-text">Menawarkan kopi spesial yang diseduh dengan biji kopi pilihan dari berbagai daerah di Indonesia.</p>
            <p class="card-text"><small class="text-muted">Jl Dozer No.19, Kec. Singaparna, Kab Tasikmalaya</small></p>
            <a href="#" class="btn btn-primary">Lihat Detail</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
          <img src="https://i.pinimg.com/564x/61/3b/0c/613b0c291027ad3f77f4acc27a31ad79.jpg" class="card-img-top" alt="Cafe Nostalgia">
          <div class="card-body">
            <h5 class="card-title">Domo.id Coffee</h5>
            <p class="card-text">Tempat yang sempurna untuk menikmati suasana klasik dan menu kopi tradisional, dan tempat yang nyaman.</p>
            <p class="card-text"><small class="text-muted">Jl Tugujaya, Kab. Tasikmalaya</small></p>
            <a href="#" class="btn btn-primary">Lihat Detail</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
          <img src="https://i.pinimg.com/564x/39/d3/a4/39d3a4e822bb18c45a2cde8fb2811b1f.jpg" class="card-img-top" alt="Cafe Espresso">
          <div class="card-body">
            <h5 class="card-title">Cafe Espresso</h5>
            <p class="card-text">Coffeeshop dengan beragam pilihan espresso dan pastry lezat.</p>
            <p class="card-text"><small class="text-muted">Jl. Melati No.15, Kab. Tasikmalaya</small></p>
            <a href="#" class="btn btn-primary">Lihat Detail</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
          <img src="https://i.pinimg.com/564x/9e/45/bf/9e45bfcc05bbd9676e66af9fb1e71e9a.jpg" class="card-img-top" alt="Cafe Vibes">
          <div class="card-body">
            <h5 class="card-title">Cafe Vibes</h5>
            <p class="card-text">Tempat hangout dengan suasana yang cozy dan menu makanan ringan.</p>
            <p class="card-text"><small class="text-muted">Jl. Raya No.10, Kab. Tasikmalaya</small></p>
            <a href="#" class="btn btn-primary">Lihat Detail</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
          <img src="https://i.pinimg.com/564x/e3/73/87/e37387d25c7188204b95a9be4f6d7b8d.jpg" class="card-img-top" alt="Cafe Breeze">
          <div class="card-body">
            <h5 class="card-title">Cafe Breeze</h5>
            <p class="card-text">Menawarkan suasana santai dengan pemandangan luar ruangan yang tenang</p>
            <p class="card-text"><small class="text-muted">Jl. Kebun Raya No.8, Kab. Tasikmalaya</small></p>
            <a href="#" class="btn btn-primary">Lihat Detail</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
          <img src="https://i.pinimg.com/736x/e0/6b/4f/e06b4ffc346f4b3aca1d4df9eba0e20c.jpg" class="card-img-top" alt="Cafe Breeze">
          <div class="card-body">
            <h5 class="card-title">Cafe Breeze</h5>
            <p class="card-text">Menawarkan suasana santai dengan pemandangan luar ruangan yang tenang</p>
            <p class="card-text"><small class="text-muted">Jl. Kebun Raya No.8, Kab. Tasikmalaya</small></p>
            <a href="#" class="btn btn-primary">Lihat Detail</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
          <img src="https://i.pinimg.com/564x/11/3a/ac/113aac4e2143000be16d33da48b6103c.jpg" class="card-img-top" alt="Cafe Espresso">
          <div class="card-body">
            <h5 class="card-title">Cafe Espresso</h5>
            <p class="card-text">Coffeeshop dengan beragam pilihan espresso dan pastry lezat.</p>
            <p class="card-text"><small class="text-muted">Jl. Melati No.15, Kab. Tasikmalaya</small></p>
            <a href="#" class="btn btn-primary">Lihat Detail</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img src="https://i.pinimg.com/564x/f5/04/7e/f5047e5da76b1ce62a00effd38c7d60d.jpg" class="card-img-top" alt="Cafe Harmoni">
            <div class="card-body">
              <h5 class="card-title">Notre Socielle</h5>
              <p class="card-text">Cafe dengan suasana yang tenang dan nyaman, cocok untuk bekerja atau bersantai bersama teman.</p>
              <p class="card-text"><small class="text-muted">Jl. Cimulu No.32, Kab. Tasikmalaya</small></p>
              <a href="/detailcafe" class="btn btn-primary">Lihat Detail</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img src="https://i.pinimg.com/564x/ae/01/05/ae0105439860725d2be8013558df3d58.jpg" class="card-img-top" alt="Cafe Aroma">
            <div class="card-body">
              <h5 class="card-title">Coffeed-19</h5>
              <p class="card-text">Menawarkan kopi spesial yang diseduh dengan biji kopi pilihan dari berbagai daerah di Indonesia.</p>
              <p class="card-text"><small class="text-muted">Jl Dozer No.19, Kec. Singaparna, Kab Tasikmalaya</small></p>
              <a href="#" class="btn btn-primary">Lihat Detail</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img src="https://i.pinimg.com/564x/4e/f6/64/4ef6643bb500720fa76c5ba3d9fefb6a.jpg" class="card-img-top" alt="Cafe Nostalgia">
            <div class="card-body">
              <h5 class="card-title">Domo.id Coffee</h5>
              <p class="card-text">Tempat yang sempurna untuk menikmati suasana klasik dan menu kopi tradisional, dan tempat yang nyaman.</p>
              <p class="card-text"><small class="text-muted">Jl Tugujaya, Kab. Tasikmalaya</small></p>
              <a href="#" class="btn btn-primary">Lihat Detail</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img src="https://i.pinimg.com/564x/39/d3/a4/39d3a4e822bb18c45a2cde8fb2811b1f.jpg" class="card-img-top" alt="Cafe Espresso">
            <div class="card-body">
              <h5 class="card-title">Cafe Espresso</h5>
              <p class="card-text">Coffeeshop dengan beragam pilihan espresso dan pastry lezat.</p>
              <p class="card-text"><small class="text-muted">Jl. Melati No.15, Kab. Tasikmalaya</small></p>
              <a href="#" class="btn btn-primary">Lihat Detail</a>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  
  
<footer class="text-center text-white" style="background-color: grey; padding: 20px; margin-top: 50px;">
  <div class="container">
    <p>&copy; 2024 CAFETRACKER. All Rights Reserved.</p>
    <ul class="list-unstyled d-flex justify-content-center mb-0">
      <li class="mx-3">
        <a href="https://www.instagram.com/alyadvkamhrnii?igsh=MXZuanA2NGdwdWgwcw==" class="text-white">
          <img src="https://cdn-icons-png.flaticon.com/512/174/174855.png" alt="Instagram" style="width: 30px;">
        </a>
      </li>
      {{-- <li class="mx-3">
        <a href="#" class="text-white">
          <img src="https://cdn-icons-png.flaticon.com/512/174/174848.png" alt="Facebook" style="width: 30px;">
        </a>
      </li>
      <li class="mx-3">
        <a href="#" class="text-white">
          <img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="Twitter" style="width: 30px;">
        </a>
      </li> --}}
    </ul>
    <p class="mt-3">Contact us: info@cafetracker.com</p>
  </div>
</footer>


{{-- <div class="container mt-5">
  <h2 class="mb-4 text-center">Temukan Kami di Sosial Media</h2>
  <div class="row text-center">
    <div class="col">
      <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/174/174855.png" alt="Instagram" style="width: 50px;"></a>
    </div>
    <div class="col">
      <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/174/174848.png" alt="Facebook" style="width: 50px;"></a>
    </div>
    <div class="col">
      <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="Twitter" style="width: 50px;"></a>
    </div>
  </div>
</div> --}}

{{-- <div class="container mt-5 mb-5">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <h2 class="text-center mb-4">Berlangganan Newsletter Kami</h2>
      <form>
        <div class="mb-3">
          <label for="email" class="form-label">Alamat Email</label>
          <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
        </div>
        <button type="submit" class="btn btn-primary w-100">Berlangganan</button>
      </form>
    </div>
  </div>
</div> --}}



</body>
</html>
