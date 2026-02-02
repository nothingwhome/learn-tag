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
    <a href="{{ url('/') }}">
      <img src="{{ asset('assets/img/logo.png') }}">
    </a>
  </div>

  <!-- Menu -->
  <ul class="nav-menu">
    <li><a href="{{ url('/pelatihan') }}">Pelatihan</a></li>
    <li><a href="#">Contact</a></li>
  </ul>

  <!-- Right -->
  <div class="nav-right">
    <div class="search-box">
      <input type="text" id="searchInput" placeholder="Cari Pelatihan">
      <button id="searchBtn" class="fa-solid fa-search"></button>
    </div>
    @auth
<form method="POST" action="{{ route('logout') }}">
  @csrf
  <button class="btn-logout">Logout</button>
</form>
@else
    <a href="/login" class="btn-login">Masuk</a>
@endauth
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
