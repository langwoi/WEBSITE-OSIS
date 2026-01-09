<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("css/home.css") }}">
</head>
<body>
    <footer class="footer-main">
    <div class="container">
        <div class="row gy-5">
            
            <div class="col-lg-4">
                <h5 class="footer-heading">Hubungi Kami</h5>
                
                <div class="contact-box">
                    <i class="bi bi-geo-alt"></i>
                    <div class="contact-text">
                        Jl. Raya Lontar No.2-4, Sambikerep,<br>Surabaya, Jawa Timur 60216
                    </div>
                </div>

                <div class="contact-box">
                    <i class="bi bi-envelope"></i>
                    <div class="contact-text">support@josjisss.com</div>
                </div>

                <div class="contact-box">
                    <i class="bi bi-whatsapp"></i>
                    <div class="contact-text">+62 812-3456-7890</div>
                </div>
            </div>

            <div class="col-lg-2 offset-lg-1 col-6">
                <h5 class="footer-heading">Menu</h5>
                <ul class="footer-link-list">
                    <li class="footer-link-item"><a href="kelas_read.php">Dashboard</a></li>
                    <li class="footer-link-item"><a href="kelas_add.php">Tambah Data</a></li>
                    <li class="footer-link-item"><a href="#">Laporan</a></li>
                    <li class="footer-link-item"><a href="#">Pengaturan</a></li>
                </ul>
            </div>

            <div class="col-lg-5 col-12">
                <h5 class="footer-heading">Lokasi Kantor</h5>
                <div class="map-wrapper">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.691924840428!2d112.65961607588383!3d-7.275886392731118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fd044235be93%3A0x68a80383500b57df!2sSD%20Khadijah%203%20Surabaya!5e0!3m2!1sid!2sid!4v1705000000000!5m2!1sid!2sid" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>

        </div>
    </div>

    <div class="footer-bottom">
        <div class="container text-center">
            <p class="copyright-text">
                &copy; 2024 <strong>Josjisss Academy</strong>. Designed for Better Management.
            </p>
        </div>
    </div>
</footer>
</body>
</html>