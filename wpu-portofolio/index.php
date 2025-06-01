<?php
function get_CURL($url) {
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);
  return json_decode($result, true);
}

$apiKey = 'AIzaSyA5DECkrAMNY0XJb3DBFSgYVUWE5bg1kA8';
$channelId = 'UCbX_TueacKEifdw8lAjARNQ';

$channelApi = "https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=$channelId&key=$apiKey";
$channelResults = get_CURL($channelApi);

$youtubeProfilePic = $channelResults['items'][0]['snippet']['thumbnails']['high']['url'] ?? 'img/thumbs/default.jpg';
$channelName = $channelResults['items'][0]['snippet']['title'] ?? 'Channel tidak ditemukan';
$subscriber = $channelResults['items'][0]['statistics']['subscriberCount'] ?? '0';

$videoApi = "https://www.googleapis.com/youtube/v3/search?key=$apiKey&channelId=$channelId&maxResults=1&order=date&part=snippet";
$videoResults = get_CURL($videoApi);
$latestVideoId = $videoResults['items'][0]['id']['videoId'] ?? 'dQw4w9WgXcQ';
?>

<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ellya Surya Ramadhani</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <style>
    body { padding-top: 80px; }
    .jumbotron img { width: 200px; }
    .navbar, footer, .bg-pink { background-color: #ff69b4 !important; color: white; }

    .navbar .navbar-brand,
    .navbar .nav-link {
      color: white !important;
      text-decoration: none !important;
    }

    .navbar .nav-link:hover {
      color: #ffe4f2 !important;
    }

    .btn-pink {
      background-color: #ff69b4;
      border-color: #ff69b4;
      color: white;
    }

    .btn-pink:hover {
      background-color: #e055a2;
      border-color: #e055a2;
    }

    #portfolio .card-img-top {
      /* default style for card images except yang inline */
      width: 100%;
      height: 150px;
      object-fit: cover;
      border-radius: 8px;
    }

    footer {
      color: white;
      padding: 1rem 0;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#home">Ellya Surya Ramadhani</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#social">Social Media</a></li>
        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center" id="home">
  <div class="container">
    <div style="width: 200px; height: 200px; overflow: hidden; border-radius: 50%; margin: auto;">
      <img src="img/thumbs/afatarhijab.png" alt="Ellya Surya Ramadhani" style="width: 100%; height: 100%; object-fit: cover;">
    </div>
    <h1 class="display-4 mt-3">Ellya Surya Ramadhani</h1>
    <p class="lead">Mahasiswi | 2217020023</p>
  </div>
</div>

<section id="about" class="py-5">
  <div class="container">
    <div class="row mb-4"><div class="col text-center"><h2>About</h2></div></div>
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <p>Halo, saya Ellya. Saya lahir pada 6 November 2004 di Jambi. Saya adalah mahasiswi semester 6 di Universitas Islam Negeri Imam Bonjol Padang. Terima kasih telah mengunjungi halaman saya.</p>
      </div>
    </div>
  </div>
</section>

<section class="social bg-light" id="social">
  <div class="container">
    <div class="row pt-4 mb-4"><div class="col text-center"><h2>Social Media</h2></div></div>
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="row">
          <div class="col-md-4">
            <img src="<?= $youtubeProfilePic ?>" width="200" class="rounded-circle img-thumbnail">
          </div>
          <div class="col-md-8">
            <h5><?= $channelName ?></h5>
            <p><?= $subscriber ?> Subscriber</p>
            <div class="g-ytsubscribe" data-channelid="<?= $channelId ?>" data-layout="default" data-count="default"></div>
          </div>
        </div>
        <div class="row mt-3 pb-3">
          <div class="col">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $latestVideoId ?>?rel=0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="portfolio" class="bg-light py-5">
  <div class="container">
    <div class="row mb-4"><div class="col text-center"><h2>Portfolio</h2></div></div>
    <div class="row justify-content-center">
      <div class="col-md-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="img/thumbs/flow.webp" alt="Flowchart Project" 
            style="width: 100%; height: auto; max-height: 200px; object-fit: contain; padding: 10px; background-color: #f0f0f0; border-radius: 10px 10px 0 0; display: block; margin: 0 auto;">
          <div class="card-body">
            <p class="card-text">Mencoba hal baru untuk membantu teman dan keluarga agar lebih terhubung lewat teknologi.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="img/thumbs/kue.webp" alt="Toko Kue" 
            style="width: 100%; height: auto; max-height: 200px; object-fit: contain; padding: 10px; background-color: #f0f0f0; border-radius: 10px 10px 0 0; display: block; margin: 0 auto;">
          <div class="card-body">
            <p class="card-text">Menyelesaikan masalah kecil sehari-hari dengan ide sederhana yang bisa membantu banyak orang.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="img/thumbs/star.webp" alt="Sistem Penilaian" 
            style="width: 100%; height: auto; max-height: 200px; object-fit: contain; padding: 10px; background-color: #f0f0f0; border-radius: 10px 10px 0 0; display: block; margin: 0 auto;">
          <div class="card-body">
            <p class="card-text">Belajar bekerja sama dan berbagi ide agar setiap hal kecil bisa jadi berarti bagi orang lain.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="contact" class="py-5">
  <div class="container">
    <div class="row mb-4"><div class="col text-center"><h2>Contact</h2></div></div>
    <div class="row justify-content-center">
      <div class="col-lg-4">
        <div class="card bg-pink text-white text-center mb-4">
          <div class="card-body">
            <h5 class="card-title">Contact Me</h5>
            <p class="card-text">Saya siap berkolaborasi atau berdiskusi mengenai project yang menarik!</p>
          </div>
        </div>
        <ul class="list-group mb-4">
          <li class="list-group-item"><h5>Location</h5></li>
          <li class="list-group-item">Padang, Indonesia</li>
        </ul>
      </div>
      <div class="col-lg-6">
        <form>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
          </div>
          <div class="form-group">
            <label for="pesan">Pesan</label>
            <textarea class="form-control" id="pesan" rows="3" placeholder="Tulis pesan Anda di sini"></textarea>
          </div>
          <button type="submit" class="btn btn-pink">Kirim</button>
        </form>
      </div>
    </div>
  </div>
</section>

<footer class="text-center py-3">
  <p>&copy; 2025 Ellya Surya Ramadhani</p>
</footer>

<!-- Script Google dan Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="https://apis.google.com/js/platform.js"></script>

</body>
</html>
