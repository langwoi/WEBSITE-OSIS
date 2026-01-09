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
<x-navbar></x-navbar>
   <section class="team-vertical" id="pengurus">
  <div class="container-team">
    <div class="team-header">
      <span>STRUKTUR ORGANISASI</span>
      <h2>PENGURUS INTI OSIS</h2>
      <div class="line-blue"></div>
    </div>

    <div class="team-vertical-list">
      
      <div class="member-row">
        <div class="member-card main-leader">
          <div class="member-img">
            <img src="../asset/ketua.jpg" alt="Ketua OSIS">
          </div>
          <div class="member-info">
            <span class="role">Ketua OSIS</span>
            <h3>Muhammad Zaky</h3>
            <p>"Memimpin dengan hati, bergerak dengan aksi untuk SMK yang lebih maju."</p>
            <div class="member-social">
               <a href="#"><i class="fab fa-instagram"></i> @zaky_ig</a>
            </div>
          </div>
        </div>
      </div>

      <div class="member-row">
        <div class="member-card">
          <div class="member-img">
            <img src="../asset/wakil.jpg" alt="Wakil Ketua">
          </div>
          <div class="member-info">
            <span class="role">Wakil Ketua OSIS</span>
            <h3>Siti Aminah</h3>
            <p>Berkomitmen mendampingi dan mensinergikan seluruh program kerja.</p>
          </div>
        </div>
      </div>

      <div class="member-row">
        <div class="member-card">
          <div class="member-img">
            <img src="../asset/sekretaris.jpg" alt="Sekretaris">
          </div>
          <div class="member-info">
            <span class="role">Sekretaris Umum</span>
            <h3>Rizky Fauzi</h3>
          </div>
        </div>
      </div>

      <div class="member-row">
        <div class="member-card">
          <div class="member-img">
            <img src="../asset/bendahara.jpg" alt="Bendahara">
          </div>
          <div class="member-info">
            <span class="role">Bendahara Umum</span>
            <h3>Lestari Putri</h3>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<x-footer></x-footer>
</body>