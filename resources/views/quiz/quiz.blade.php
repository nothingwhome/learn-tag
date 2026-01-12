<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pembelajaran Terpadu</title>
    <style>
        /* CSS MURNI - TANPA FRAMEWORK */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        .hero-section {
            background: linear-gradient(135deg, #FFB6B6 0%, #FFD9C0 100%);
            padding: 80px 20px;
            position: relative;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            overflow: hidden;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .hero-section::before,
        .hero-section::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
        }

        .hero-section::before {
            top: -100px;
            right: -100px;
            width: 400px;
            height: 400px;
        }

        .hero-section::after {
            bottom: -150px;
            left: -100px;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.3);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 400px;
            position: relative;
            z-index: 2;
        }

        .hero-text {
            flex: 1;
            max-width: 600px;
        }

        .logo img {
            height: 60px;
        }

        .hero-text h1 {
            font-size: 3rem;
            line-height: 1.3;
            color: #000;
            margin-bottom: 30px;
            font-weight: 800;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.1);
        }

        .search-form {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .search-form input {
            flex: 1;
            padding: 16px 20px;
            border: 2px solid #ddd;
            border-radius: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .search-form input:focus {
            outline: none;
            border-color: #28a745;
            box-shadow: 0 0 0 3px rgba(40, 167, 69, 0.2);
        }

        .search-form button {
            background: #28a745;
            color: white;
            border: none;
            padding: 0 25px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(40, 167, 69, 0.3);
        }

        .search-form button:hover {
            background: #218838;
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(40, 167, 69, 0.4);
        }

        .hero-illustration {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .hero-illustration img {
            max-width: 100%;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
            transform: rotate(2deg);
            transition: transform 0.3s ease;
        }

        .hero-illustration img:hover {
            transform: rotate(0deg);
        }

        /* RESPONSIVE DESIGN */
        @media (max-width: 992px) {
            .container {
                flex-direction: column;
                text-align: center;
            }

            .hero-text h1 {
                font-size: 2.3rem;
            }

            .search-form {
                flex-direction: column;
            }

            .hero-illustration {
                order: -1;
                margin-bottom: 30px;
            }
        }

        @media (max-width: 576px) {
            .hero-section {
                padding: 60px 15px;
            }

            .hero-text h1 {
                font-size: 1.8rem;
            }

            .search-form input,
            .search-form button {
                padding: 14px;
                font-size: 14px;
            }

            .logo img {
                height: 50px;
            }
        }
    </style>
</head>
<body>
    @include('component.navbar')
    <section class="hero-section">
        <div class="container">
            <div class="hero-text">
                <div class="logo">
                    <img src="https://camo.githubusercontent.com/4bdce6bd47a87e161c0a9ad6ed6b44399afd6d82bffe59c3da3fd050bc489eeb/68747470733a2f2f6c696e6b74722e65652f6f672f696d6167652f736d6b7461676f6666696369616c2e6a7067" alt="Logo iPintar">
                </div>
                <h1>Temukan Pelatihan untuk Tingkatkan Kompetensi Anda</h1>
                <form id="searchForm" class="search-form">
                    <input type="text" id="searchInput" placeholder="Cari Jadwal Pelatihan & Kelas Pelatihan...">
                    <button type="submit">Cari</button>
                </form>
            </div>
            <div class="hero-illustration">
                <img src="https://th.bing.com/th/id/OIP.U1JM841c2wZgrqRSznfrngHaHa?w=199&h=199&c=7&r=0&o=7&dpr=1.5&pid=1.7&rm=3" alt="Ilustrasi Pelatihan">
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchForm = document.getElementById('searchForm');
            const searchInput = document.getElementById('searchInput');

            // Handle form submission
            searchForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const searchTerm = searchInput.value.trim();

                if (searchTerm.length < 3) {
                    alert('Kata kunci minimal 3 karakter!');
                    return;
                }

                // Contoh integrasi dengan Laravel
                // Ganti URL sesuai route pencarian Anda
                const searchUrl = `/cari?query=${encodeURIComponent(searchTerm)}`;

                // Untuk demo, kita hanya tampilkan alert
                alert(`Mencari pelatihan dengan kata kunci:\n"${searchTerm}"`);

                // Uncomment baris berikut untuk redirect ke halaman pencarian
                // window.location.href = searchUrl;
            });

            // Animasi input focus
            searchInput.addEventListener('focus', function() {
                this.style.borderColor = '#28a745';
                this.style.boxShadow = '0 0 0 3px rgba(40, 167, 69, 0.2)';
            });

            searchInput.addEventListener('blur', function() {
                this.style.borderColor = '#ddd';
                this.style.boxShadow = '0 2px 5px rgba(0,0,0,0.05)';
            });

            // Efek hover pada ilustrasi
            const illustration = document.querySelector('.hero-illustration img');
            illustration.addEventListener('mouseenter', function() {
                this.style.transform = 'rotate(0deg) scale(1.02)';
            });
            illustration.addEventListener('mouseleave', function() {
                this.style.transform = 'rotate(2deg)';
            });
        });
    </script>
</body>
</html>
