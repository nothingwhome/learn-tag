<!DOCTYPE html>
<html lang="id">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <meta charset="UTF-8">
  <title>Footer</title>

  <style>
body {
  margin: 0;
  padding: 0;
}
.footer {
  width: 100vw;
  background-color: #22935a;
  color: white;
  padding: 40px 0 20px;
}

.footer-inner {
  max-width: 1200px;
  margin: auto;
  padding: 0 24px;

  position: relative; /* WAJIB */
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.footer-logo img {
  height: 60px;
}

.footer-contact {
  text-align: right;
}

/* INI KUNCI */
.footer-center-fixed {
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  text-align: center;
  pointer-events: none;
}

.footer-center-fixed h3 {
  font-size: 30px;
  font-weight: normal;
    font-family: 'Bebas Neue', sans-serif;
}

.footer-social {
  margin-top: 30px;
  text-align: center;
}

.footer-social a {
  color: white;
  margin: 0 12px;
  font-size: 20px;
  text-decoration: none;
}

.footer hr {
  margin: 25px 0 15px;
  border: none;
  border-top: 1px solid rgba(255,255,255,0.3);
}

.footer-bottom {
  text-align: center;
  font-size: 14px;
}

  .footer-contact {
    text-align: center;
  }

  </style>
</head>
<body>

<footer class="footer">
  <div class="footer-inner">

    <div class="footer-logo">
      <img src="{{ asset('assets/img/logo.png') }}">
    </div>

    <!-- Teks TENGAH FIX -->
    <div class="footer-center-fixed">
      <h3>“Belajar Mandiri, Pintar Bersama”</h3>
    </div>

    <div class="footer-contact">
      <h4>Kontak</h4>
      <p>+62 821-1113-2816</p>
    </div>

  </div>

  <div class="footer-social">
    <a href="#"><i class="fa-brands fa-facebook"></i></a>
    <a href="#"><i class="fa-brands fa-instagram"></i></a>
    <a href="#"><i class="fa-brands fa-youtube"></i></a>
    <a href="#"><i class="fa-brands fa-twitter"></i></a>
  </div>

  <hr>

  <div class="footer-bottom">
    © SMKTAG
  </div>
</footer>


</body>
</html>

