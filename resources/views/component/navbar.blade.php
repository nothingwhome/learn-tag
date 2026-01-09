<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>Navbar</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Nunito', sans-serif;
    }

    .navbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 12px 24px;
      background-color: #fff;
      border-bottom: 1px solid #eee;
    }

    .logo img {
      height: 40px;
      cursor: pointer;
    }

    .nav-menu {
      display: flex;
      list-style: none;
      gap: 24px;
    }

    .nav-menu a {
      text-decoration: none;
      color: #333;
      font-weight: 500;
    }

    .nav-menu a:hover {
      color: #1f7a4d;
    }

    .nav-right {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    /* Search */
    .search-box {
      display: flex;
      align-items: center;
      border: 1px solid #ccc;
      border-radius: 20px;
      overflow: hidden;
    }

    .search-box input {
      border: none;
      padding: 8px 12px;
      outline: none;
      width: 180px;
    }

    .search-box button {
      background-color: transparent;
      border: none;
      padding: 8px 12px;
      cursor: pointer;
      font-size: 16px;
    }

    .search-box button:hover {
      background-color: #f0f0f0;
    }

    .btn-login {
      padding: 8px 18px;
      background-color: #1f7a4d;
      color: white;
      border: none;
      border-radius: 20px;
      cursor: pointer;
    }

    .btn-login:hover {
      background-color: #16613c;
    }
  </style>
</head>
<body>

<nav class="navbar">
  <!-- Logo -->
  <div class="logo">
    <a href="index.html">
      <img src="{{ asset('assets/img/logo.png') }}">
    </a>
  </div>

  <!-- Menu -->
  <ul class="nav-menu">
    <li><a href="#">Pelatihan</a></li>
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
