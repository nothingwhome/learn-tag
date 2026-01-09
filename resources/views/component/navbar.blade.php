<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

    <title>Navbar</title>
</head>
<body>

<nav class="navbar">
  <!-- Logo -->
  <div class="logo">
    <a href="{{ url('/navbar') }}">
      <img src="{{ asset('assets/img/logo.png') }}">
    </a>
  </div>

  <!-- Menu -->
  <ul class="nav-menu">
    <li><a href="{{ url('/') }}">Pelatihan</a></li>
    <li><a href="#">Klinik Pengetahuan</a></li>
    <li><a href="#">Berbagi Pengetahuan</a></li>
  </ul>

  <!-- Right -->
  <div class="nav-right">
    <div class="search-box">
      <input type="text" id="searchInput" placeholder="Cari Pelatihan">
      <button id="searchBtn" class="fa-solid fa-search"></button>
    </div>
    <button class="btn-login" id="loginBtn">Masuk</button>
  </div>
</nav>

<script>
  // Tombol login
  document.getElementById("loginBtn").addEventListener("click", () => {
    window.location.href = "login.html";
  });

  // Tombol cari
  document.getElementById("searchBtn").addEventListener("click", () => {
    const keyword = document.getElementById("searchInput").value;
    if (keyword.trim() !== "") {
      alert("Mencari: " + keyword);
      // contoh redirect:
      // window.location.href = "search.html?q=" + keyword;
    }
  });
</script>

</body>
</html>