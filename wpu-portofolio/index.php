<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ellya Surya Ramadhani</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <style>
      body {
        padding-top: 70px;
      }
      .jumbotron {
        background-color: #f8f9fa;
        padding-top: 4rem;
        padding-bottom: 4rem;
      }
      .jumbotron img {
        width: 200px;
      }
      footer {
        background-color: #343a40;
        color: white;
        padding: 1rem 0;
      }
    </style>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
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

    <!-- Jumbotron -->
    <div class="jumbotron text-center" id="home">
      <div class="container">
        <div style="width: 200px; height: 200px; overflow: hidden; border-radius: 50%; margin: auto;">
        <img src="img/thumbs/afatarhijab.png" alt="Ellya Surya Ramadhani" style="width: 100%; height: 100%; object-fit: cover;">
          </div>
        <h1 class="display-4 mt-3">Ellya Surya Ramadhani</h1>
        <p class="lead">Mahasiswi | 2217020023</p>
      </div>
    </div>

    <!-- About -->
    <section id="about" class="py-5">
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center">
            <h2>About</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <p class="text-center">Halo, saya Ellya. Saya lahir pada 6 November 2004 di Jambi. Saya adalah mahasiswi semester 6 di salah satu perguruan tinggi Islam di Indonesia yaitu Universitas Islam Negeri Imam Bonjol Padang. Terima kasih telah mengunjungi halaman saya.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- instagram -->
    <section class="social bg-light" id="social">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Social Media</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-5 text-center">
            <h5>Instagram</h5>
            <a href="https://www.instagram.com/ellya.rrr" target="_blank">
              <img src="img/thumbs/instagram.jpeg" width="150" height="150" style="object-fit: cover; border-radius: 50%;">
            </a>
          </div>
        </div>
      </div>
    </section>





    <!-- Portfolio -->
    <section id="portfolio" class="bg-light py-5">
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center">
            <h2>Portfolio</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/1.png" alt="Project 1">
              <div class="card-body">
                <p class="card-text">Project 1: Website sederhana menggunakan HTML, CSS, dan Bootstrap.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/3.png" alt="Project 2">
              <div class="card-body">
                <p class="card-text">Project 2: Aplikasi to-do list dengan JavaScript.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/5.png" alt="Project 3">
              <div class="card-body">
                <p class="card-text">Project 3: Desain UI/UX untuk aplikasi mobile edukasi.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-5">
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center">
            <h2>Contact</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card bg-primary text-white text-center mb-4">
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
              <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
      <div class="container">
        <p>&copy; 2025 Ellya Surya Ramadhani