<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OSIS</title>

<link rel="stylesheet" href="{{ asset('css/home.css') }}">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <section class="hero" id="home">
  <div class="hero-slider">

    <div class="slide active slide1">
      <div class="hero-content">
        <h1>WELCOME CUKIIIMAIII</h1>
        <p>SJNSJSHHSSS</p>
      </div>
    </div>

    <div class="slide slide2">
      <div class="hero-content">
        <h1>OSIS SMK KEREN</h1>
        <p>Solid • Aktif • Kreatif</p>
      </div>
    </div>

    <div class="slide slide3">
      <div class="hero-content">
        <h1>BERSAMA KITA BISA</h1>
        <p>Join Sekarang!</p>
      </div>
    </div>

  </div>
</section>


<!-- HERO 2 -->
<section class="hero2" id="about">
  <div class="banner">
    <h1>ANJAIIII</h1>
    <p>JOSJISS</p>
<div class="stack">
  <div class="card">
    <div class="image"></div>
  </div>
</div>

  </div>
</section>

<!-- STATS -->
<section class="stats">
  <div class="judul-stats">
    <h1>TOTAL ANGGOTA DAN SEKBID</h1>
  </div>
  <div class="stat-card">
    <h2 class="counter" data-target="55">0</h2>
    <p>Total Anggota</p>
  </div>

  <div class="stat-card">
    <h2 class="counter" data-target="09">0</h2>
    <p>Total Sekbid</p>
  </div>
</section>


<section class="vision-mission" id="vision">
  <div class="container-vision">
    <div class="vision-box">
      <div class="vision-image">
        <img src="{{ asset('images/hero4.jpg') }}" alt="Vision Illustration">
      </div>

      <div class="vision-content">
        <span>VISI KAMI</span>
        <h2>VISI OSIS SMK</h2>
        <p>
          Menjadikan OSIS sebagai wadah aspirasi siswa yang inovatif, 
          berintegritas tinggi, dan berkarakter unggul dalam menciptakan 
          lingkungan sekolah yang aktif serta religius.
        </p>
      </div>
    </div>

    <div class="mission-wrapper">
      <div class="mission-header">
        <h2>MISI KAMI</h2>
        <div class="divider"></div>
      </div>

      <div class="mission-grid">
        <div class="mission-card">
          <div class="m-count">01</div>
          <h3>Aktif & Kreatif</h3>
          <p>Mengembangkan bakat siswa melalui event sekolah yang seru.</p>
        </div>

        <div class="mission-card">
          <div class="m-count">02</div>
          <h3>Solidaritas</h3>
          <p>Membangun komunikasi yang erat antar pengurus dan seluruh siswa.</p>
        </div>

        <div class="mission-card">
          <div class="m-count">03</div>
          <h3>Disiplin</h3>
          <p>Menjadi teladan bagi siswa lain dalam hal tata tertib sekolah.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="greetings-section" id="greetings">
  <div class="container-greetings">
    <div class="greetings-header">
      <span>WORDS FROM LEADERS</span>
      <h2>SAMBUTAN KAMI</h2>
    </div>

    <div class="greetings-grid">
      <div class="greet-card">
        <div class="greet-img">
          <img src="../asset/ketua-osis.jpg" alt="Ketua OSIS">
        </div>
        <div class="greet-text">
          <i class="fas fa-quote-left"></i>
          <p>
            "Halo rekan-rekan SMK! OSIS bukan sekadar organisasi, tapi rumah bagi kreativitas dan kepemimpinan. Mari kita jadikan tahun ini masa keemasan untuk berkarya bersama, solid, dan tanpa batas!"
          </p>
          <h4>Fulan bin Fulan</h4>
          <span>Ketua OSIS 2024/2025</span>
        </div>
      </div>

      <div class="greet-card">
        <div class="greet-img">
          <img src="../asset/alumni.jpg" alt="Alumni OSIS">
        </div>
        <div class="greet-text">
          <i class="fas fa-quote-left"></i>
          <p>
            "Pengalaman di OSIS adalah investasi terbaik saya. Di sini kalian belajar bagaimana memimpin dan dipimpin. Teruslah berinovasi dan bawa nama baik sekolah kita ke puncak tertinggi!"
          </p>
          <h4>Nama Alumni, S.T</h4>
          <span>Ketua OSIS Periode 2018</span>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="{{ asset("js/index.js") }}"></script>
</body>
</html>
