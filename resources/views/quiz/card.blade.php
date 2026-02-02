<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>LearnTag - Pelatihan</title>
    <style>
        /* ========================================
           GLOBAL STYLES
           ======================================== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f7fafc;
            min-height: 100vh;
            color: #2d3748;
        }

        /* ========================================
           NAVBAR (Placeholder - sesuaikan dengan navbar Anda)
           ======================================== */
        .navbar {
            background: white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            padding: 1rem 2rem;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .navbar-content {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 700;
            color: #2f855a;
        }

        /* ========================================
           MODUL CARD STYLING
           ======================================== */

        /* Container untuk grid modul */
        .modules-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem 1.5rem 4rem 1.5rem;
        }

        /* Header halaman */
        .modules-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
            gap: 1rem;
            padding: 0 1rem;
        }

        .modules-header h1 {
            font-size: 1.875rem;
            font-weight: 700;
            color: #1a202c;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Filter section */
        .filter-section {
            display: flex;
            gap: 1rem;
            align-items: center;
            flex-wrap: wrap;
        }

        .filter-section select,
        .filter-section button {
            padding: 0.625rem 1.25rem;
            border-radius: 8px;
            border: 1px solid #e2e8f0;
            font-size: 1rem;
            background-color: white;
            cursor: pointer;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            outline: none;
        }

        .filter-section select {
            min-width: 180px;
            color: #4a5568;
        }

        .filter-section button {
            background-color: #2f855a;
            color: white;
            border: none;
            font-weight: 600;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .filter-section button:hover {
            background-color: #276749;
            transform: translateY(-2px);
        }

        /* Search Section */
        .search-section {
            max-width: 600px;
            margin: 0 auto 2rem auto;
            padding: 0 1rem;
        }

        .search-box {
            position: relative;
            display: flex;
            align-items: center;
            background: white;
            border-radius: 12px;
            border: 2px solid #e2e8f0;
            padding: 0.75rem 1rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            transition: border-color 0.3s ease;
        }

        .search-box:focus-within {
            border-color: #4299e1;
            box-shadow: 0 4px 12px rgba(66, 153, 225, 0.2);
        }

        .search-box i.fa-magnifying-glass {
            color: #718096;
            margin-right: 10px;
            font-size: 1.1rem;
        }

        .search-input {
            flex: 1;
            border: none;
            outline: none;
            font-size: 1rem;
            color: #2d3748;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: transparent;
        }

        .search-input::placeholder {
            color: #a0aec0;
        }

        .clear-btn {
            background: none;
            border: none;
            color: #718096;
            cursor: pointer;
            padding: 4px 8px;
            border-radius: 4px;
            transition: all 0.2s;
        }

        .clear-btn:hover {
            color: #e53e3e;
            background: #fee2e2;
        }

        .clear-btn i {
            font-size: 1.1rem;
        }

        /* Info jumlah pelatihan */
        .text-center {
            text-align: center;
            margin-bottom: 2rem;
        }

        .text-gray-600 {
            color: #4a5568;
            font-size: 1rem;
        }

        .text-gray-600 strong {
            color: #2d3748;
            font-weight: 700;
        }

        /* Grid modul */
        .modules-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 1.5rem;
            padding: 0 1rem;
        }

        /* Card modul */
        .module-card {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            background: white;
            position: relative;
            height: 100%;
            border: 1px solid #e2e8f0;
        }

        .module-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.15);
            border-color: #cbd5e0;
        }

        /* Header card (angkatan badge) */
        .module-header {
            position: relative;
            height: 60px;
            background: linear-gradient(to right, #f0f4f8, #e2e8f0);
            padding: 16px;
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }

        .angkatan-badge {
            position: relative;
            background: #fff9db;
            color: #854d21;
            padding: 6px 16px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 14px;
            border: 1px solid #f0c9a8;
            box-shadow: 0 2px 4px rgba(133, 77, 33, 0.1);
        }

        /* Gambar modul dengan SELESAI label */
        .module-image {
            position: relative;
            height: 200px;
            overflow: hidden;
            background: #f7fafc;
        }

        .module-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .module-card:hover .module-image img {
            transform: scale(1.05);
        }

        .selesai-label {
            position: absolute;
            top: 16px;
            left: 16px;
            background: transparent;
            color: #e53e3e;
            font-weight: bold;
            font-size: 20px;
            border: 2px solid #e53e3e;
            padding: 6px 12px;
            transform: rotate(-15deg);
            z-index: 2;
            font-family: 'Arial', sans-serif;
            letter-spacing: 1px;
            box-shadow: 0 2px 4px rgba(229, 62, 62, 0.2);
        }

        /* Konten card */
        .module-content {
            padding: 1.5rem;
        }

        .module-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 1rem;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .module-meta {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
            margin-bottom: 1.5rem;
            color: #4a5568;
            font-size: 0.9rem;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .meta-item i {
            color: #4299e1;
            min-width: 1.5rem;
            font-size: 1rem;
        }

        /* Tombol download */
        .module-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            background: #2f855a;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 12px 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1rem;
            text-decoration: none;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            box-shadow: 0 2px 4px rgba(47, 133, 90, 0.2);
        }

        .module-button i {
            margin-right: 8px;
            font-size: 1.1rem;
        }

        .module-button:hover {
            background: #276749;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(47, 133, 90, 0.3);
        }

        .module-button:active {
            transform: translateY(0);
        }

        /* Rating stars */
        .meta-item i.fa-star {
            color: #f6ad55;
        }

        /* No Results Message */
        .no-results-message {
            grid-column: 1 / -1;
            text-align: center;
            padding: 4rem 2rem;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        /* Toast Notification */
        .toast-notification {
            position: fixed;
            top: 20px;
            right: 20px;
            background: #c6f6d5;
            color: #276749;
            padding: 1rem 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transform: translateX(400px);
            transition: transform 0.3s ease;
            z-index: 9999;
            border-left: 4px solid #38a169;
        }

        /* Footer (Placeholder) */
        .footer {
            background: white;
            padding: 2rem;
            text-align: center;
            margin-top: 4rem;
            box-shadow: 0 -2px 8px rgba(0, 0, 0, 0.05);
        }

        /* Responsif */
        @media (max-width: 768px) {
            .modules-grid {
                grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            }
            
            .module-title {
                font-size: 1.125rem;
            }
            
            .modules-header {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .filter-section {
                width: 100%;
            }
            
            .search-section {
                max-width: 100%;
            }
        }

        @media (max-width: 480px) {
            .modules-grid {
                grid-template-columns: 1fr;
            }
            
            .modules-header h1 {
                font-size: 1.5rem;
            }
            
            .filter-section select {
                width: 100%;
            }
            
            .module-header {
                height: 50px;
            }
            
            .module-image {
                height: 180px;
            }
            
            .navbar-content {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar (Placeholder - sesuaikan dengan navbar Anda) -->

    <main>
        <div class="modules-container">
            <!-- Header -->
            <div class="modules-header">
                <h1>Pelatihan Terbaru</h1>
                <div class="filter-section">
                    <select class="filter-select" id="angkatanFilter">
                        <option value="Semua Pelatihan">Semua Pelatihan</option>
                        <option value="Angkatan I">Angkatan I</option>
                        <option value="Angkatan II">Angkatan II</option>
                        <option value="Angkatan III">Angkatan III</option>
                    </select>
                    <button class="filter-button" id="filterBtn">
                        <i class="fa-solid fa-filter"></i> Filter
                    </button>
                </div>
            </div>

            <!-- Search Box -->
            {{-- <div class="search-section">
                <div class="search-box">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" id="searchInput" placeholder="Cari modul..." class="search-input">
                    <button class="clear-btn" id="clearSearch" style="display: none;">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
            </div> --}}

            <!-- Info jumlah pelatihan -->
            <div class="text-center">
                <span class="text-gray-600">Ditemukan <strong id="countDisplay">12</strong> Pelatihan</span>
            </div>

            <!-- Grid Modul -->
            <div class="modules-grid" id="modulesGrid">
                
                <!-- Card 1 -->
                <div class="module-card" data-angkatan="Angkatan I" data-title="dasar dasar programming pemula">
                    <div class="module-header">
                        <span class="angkatan-badge">Angkatan I</span>
                    </div>
                    <div class="module-image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSj5K08rKxUEHZsgxTHElnQc6bFEmuVzD6FUg&s" alt="Modul Programming">
                    </div>
                    <div class="module-content">
                        <h2 class="module-title">Dasar-Dasar HTML untuk Pemula</h2>
                        <div class="module-meta">
                            <div class="meta-item">
                                <i class="fa-regular fa-calendar"></i>
                                <span>Mei 2021</span>
                            </div>
                            <div class="meta-item">
                                <i class="fa-solid fa-star"></i>
                                <span>4.8</span>
                            </div>
                        </div>
                        <a href="https://digilib.stekom.ac.id/assets/dokumen/ebook/feb_292f912ab7e9b7bac101c87c197fe591cdd6b120_1648523336.pdf" 
                           class="module-button" target="_blank">
                            <i class="fa-solid fa-download"></i> Unduh Modul
                        </a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="module-card" data-angkatan="Angkatan II" data-title="html css fundamental web developer">
                    <div class="module-header">
                        <span class="angkatan-badge">Angkatan II</span>
                    </div>
                    <div class="module-image">
                        <img src="https://www.angon.co.id/wp-content/uploads/2023/10/1686539179.png" alt="Modul HTML CSS">
                    </div>
                    <div class="module-content">
                        <h2 class="module-title">Laravel Dasar Pemula</h2>
                        <div class="module-meta">
                            <div class="meta-item">
                                <i class="fa-regular fa-calendar"></i>
                                <span>18 Jan 2026 - 25 Jan 2026</span>
                            </div>
                            <div class="meta-item">
                                <i class="fa-solid fa-star"></i>
                                <span>4.9</span>
                            </div>
                        </div>
                        <a href="https://digilib.stekom.ac.id/assets/dokumen/ebook/feb_B8-GOdzvXQ0qiJqdyUjO6ryV7949c7dfgjGg8zeDkwjSqdYD-3nRT5A_1688373637.pdf" 
                           class="module-button" target="_blank">
                            <i class="fa-solid fa-download"></i> Unduh Modul
                        </a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="module-card" data-angkatan="Angkatan III" data-title="javascript advanced frontend development">
                    <div class="module-header">
                        <span class="angkatan-badge">Angkatan III</span>
                    </div>
                    <div class="module-image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3htWCtpgNMoEnv9w4zx4ZaEFZVjd7-uOlZw&s" alt="Modul JavaScript">
                    </div>
                    <div class="module-content">
                        <h2 class="module-title">JavaScript Advanced untuk Frontend Development</h2>
                        <div class="module-meta">
                            <div class="meta-item">
                                <i class="fa-regular fa-calendar"></i>
                                <span>01 Feb 2026 - 10 Feb 2026</span>
                            </div>
                            <div class="meta-item">
                                <i class="fa-regular fa-user"></i>
                                <span>M Sholikhan</span>
                            </div>
                            <div class="meta-item">
                                <i class="fa-solid fa-star"></i>
                                <span>4.7</span>
                            </div>
                        </div>
                        <a href="https://digilib.stekom.ac.id/assets/dokumen/ebook/feb_B8uLNNrqWgUrj5qdyUnK6ryV7949c7RdhjCs8T-AlAjSqdwF-nvQTpc_1682562390.pdf" 
                           class="module-button" target="_blank">
                            <i class="fa-solid fa-download"></i> Unduh Modul
                        </a>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="module-card" data-angkatan="Angkatan I" data-title="database management system pemula">
                    <div class="module-header">
                        <span class="angkatan-badge">Angkatan I</span>
                    </div>
                    <div class="module-image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQM91T1S4z84bTfnQg-ExIMn9MW_bs43wkg5g&s" alt="Modul Database">
                    </div>
                    <div class="module-content">
                        <h2 class="module-title">Database SQL Untuk Pemula</h2>
                        <div class="module-meta">
                            <div class="meta-item">
                                <i class="fa-regular fa-calendar"></i>
                                <span>15 Feb 2026 - 22 Feb 2026</span>
                            </div>
                            <div class="meta-item">
                                <i class="fa-solid fa-star"></i>
                                <span>4.6</span>
                            </div>
                        </div>
                        <a href="https://example.com/files/modul-database.pdf" 
                           class="module-button" target="_blank">
                            <i class="fa-solid fa-download"></i> Unduh Modul
                        </a>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="module-card" data-angkatan="Angkatan II" data-title="cybersecurity basics keamanan it">
                    <div class="module-header">
                        <span class="angkatan-badge">Angkatan II</span>
                    </div>
                    <div class="module-image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvtuKkcgYrpv3UAUY-rYcO9dp_XjUjy67eVw&s" alt="Modul Cybersecurity">
                    </div>
                    <div class="module-content">
                        <h2 class="module-title">Cybersecurity Basics Website untuk Keamanan IT</h2>
                        <div class="module-meta">
                            <div class="meta-item">
                                <i class="fa-regular fa-calendar"></i>
                                <span>01 Mar 2026 - 08 Mar 2026</span>
                            </div>
                            <div class="meta-item">
                                <i class="fa-solid fa-star"></i>
                                <span>4.9</span>
                            </div>
                        </div>
                        <a href="https://digilib.stekom.ac.id/assets/dokumen/ebook/feb_B8qGPNvrWwcthJqdyUnK67yV7949c7RdhjCs8z6ElAjSqdwF-njSTJc_1682562958.pdf" 
                           class="module-button" target="_blank">
                            <i class="fa-solid fa-download"></i> Unduh Modul
                        </a>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="module-card" data-angkatan="Angkatan III" data-title="python programming data science">
                    <div class="module-header">
                        <span class="angkatan-badge">Angkatan III</span>
                    </div>
                    <div class="module-image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYZqZkpMyiN2uSuT7GAf6JSkJ44YsZqoQHdw&s" alt="Modul Python">
            
                    </div>
                    <div class="module-content">
                        <h2 class="module-title">Python Programming untuk Data Science</h2>
                        <div class="module-meta">
                            <div class="meta-item">
                                <i class="fa-regular fa-calendar"></i>
                                <span>10 Mar 2026 - 17 Mar 2026</span>
                            </div>
                            <div class="meta-item">
                                <i class="fa-regular fa-user"></i>
                                <span>Dr. Joseph Teguh Santoso, S.Kom, M.Kom</span>
                            </div>
                            <div class="meta-item">
                                <i class="fa-solid fa-star"></i>
                                <span>4.8</span>
                            </div>
                        </div>
                        <a href="https://digilib.stekom.ac.id/assets/dokumen/ebook/feb_2b476eab418c695cec15b3dc45a17efe95199a7e_1643162488.pdf" 
                           class="module-button" target="_blank">
                            <i class="fa-solid fa-download"></i> Unduh Modul
                        </a>
                    </div>
                </div>

                <!-- Card 7 -->
                <div class="module-card" data-angkatan="Angkatan I" data-title="laravel framework backend development">
                    <div class="module-header">
                        <span class="angkatan-badge">Angkatan I</span>
                    </div>
                    <div class="module-image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkA7naATL6cBko2pKkiIVU0E1Xfm2xzAOvrQ&s" alt="Modul Laravel">
                    </div>
                    <div class="module-content">
                        <h2 class="module-title">PHP Untuk Pemula</h2>
                        <div class="module-meta">
                            <div class="meta-item">
                                <i class="fa-regular fa-calendar"></i>
                                <span>20 Mar 2026 - 27 Mar 2026</span>
                            </div>
                            <div class="meta-item">
                                <i class="fa-solid fa-star"></i>
                                <span>4.7</span>
                            </div>
                        </div>
                        <a href="https://gilacoding.com/upload/file/PHP%20Dasar%20Tutorial.pdf" 
                           class="module-button" target="_blank">
                            <i class="fa-solid fa-download"></i> Unduh Modul
                        </a>
                    </div>
                </div>

                <!-- Card 8 -->
                <div class="module-card" data-angkatan="Angkatan II" data-title="reactjs modern web applications">
                    <div class="module-header">
                        <span class="angkatan-badge">Angkatan II</span>
                    </div>
                    <div class="module-image">
                        <img src="https://indoittraining.com/wp-content/uploads/sites/3/2020/11/reactjs.png" alt="Modul React">
                        
                    </div>
                    <div class="module-content">
                        <h2 class="module-title">ReactJS untuk Modern Web Applications</h2>
                        <div class="module-meta">
                            <div class="meta-item">
                                <i class="fa-regular fa-calendar"></i>
                                <span>01 Apr 2026 - 08 Apr 2026</span>
                            </div>

                            <div class="meta-item">
                                <i class="fa-solid fa-star"></i>
                                <span>4.9</span>
                            </div>
                        </div>
                        <a href="https://repositori.telkomuniversity.ac.id/pustaka/files/165642/ebook/menguasi-react-js-untuk-pemula.pdf" 
                           class="module-button" target="_blank">
                            <i class="fa-solid fa-download"></i> Unduh Modul
                        </a>
                    </div>
                </div>

                <!-- Card 9 -->
                <div class="module-card" data-angkatan="Angkatan III" data-title="nodejs backend javascript">
                    <div class="module-header">
                        <span class="angkatan-badge">Angkatan III</span>
                    </div>
                    <div class="module-image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqN2QDHji5XloG3MOMWhy1JWFPXt1lQQIqZw&s" alt="Modul NodeJS">
                    </div>
                    <div class="module-content">
                        <h2 class="module-title">NodeJS untuk Backend JavaScript Development</h2>
                        <div class="module-meta">
                            <div class="meta-item">
                                <i class="fa-regular fa-calendar"></i>
                                <span>15 Apr 2026 - 22 Apr 2026</span>
                            </div>
                            <div class="meta-item">
                                <i class="fa-regular fa-user"></i>
                                <span>Yunia Ikawati</span>
                            </div>
                            <div class="meta-item">
                                <i class="fa-solid fa-star"></i>
                                <span>4.8</span>
                            </div>
                        </div>
                        <a href="https://yunia.lecturer.pens.ac.id/Workshop%20Pemrograman%20Web/8-Node%20JS.pdf" 
                           class="module-button" target="_blank">
                            <i class="fa-solid fa-download"></i> Unduh Modul
                        </a>
                    </div>
                </div>

                <!-- Card 10 -->
                <div class="module-card" data-angkatan="Angkatan I" data-title="vuejs frontend framework">
                    <div class="module-header">
                        <span class="angkatan-badge">Angkatan I</span>
                    </div>
                    <div class="module-image">
                        <img src="https://www.tutorialspoint.com/css/images/css.png" alt="Modul VueJS">
        
                    </div>
                    <div class="module-content">
                        <h2 class="module-title">CSS Pemula Frontend Development</h2>
                        <div class="module-meta">
                            <div class="meta-item">
                                <i class="fa-regular fa-calendar"></i>
                                <span>01 Mei 2026 - 08 Mei 2026</span>
                            </div>
                            <div class="meta-item">
                                <i class="fa-solid fa-star"></i>
                                <span>4.7</span>
                            </div>
                        </div>
                        <a href="https://ocw.upj.ac.id/files/Handout-INF104-INF104-Pertemuan-6.pdf" 
                           class="module-button" target="_blank">
                            <i class="fa-solid fa-download"></i> Unduh Modul
                        </a>
                    </div>
                </div>

                <!-- Card 11 -->
                <div class="module-card" data-angkatan="Angkatan II" data-title="docker containerization">
                    <div class="module-header">
                        <span class="angkatan-badge">Angkatan II</span>
                    </div>
                    <div class="module-image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmJsm6luiQGd54b5qITrZlN1igMfb-XWcyaw&s" alt="Modul Docker">
                    </div>
                    <div class="module-content">
                        <h2 class="module-title">Docker untuk Containerization Applications</h2>
                        <div class="module-meta">
                            <div class="meta-item">
                                <i class="fa-regular fa-calendar"></i>
                                <span>15 Mei 2026 - 22 Mei 2026</span>
                            </div>
                            <div class="meta-item">
                                <i class="fa-regular fa-user"></i>
                                <span>Yunia Ikawati</span>
                            </div>
                            <div class="meta-item">
                                <i class="fa-solid fa-star"></i>
                                <span>4.9</span>
                            </div>
                        </div>
                        <a href="https://lmsspada.kemdiktisaintek.go.id/pluginfile.php/704477/mod_resource/content/1/Modul%203%20Docker.pdf" 
                           class="module-button" target="_blank">
                            <i class="fa-solid fa-download"></i> Unduh Modul
                        </a>
                    </div>
                </div>

                <!-- Card 12 -->
                <div class="module-card" data-angkatan="Angkatan III" data-title="aws cloud computing">
                    <div class="module-header">
                        <span class="angkatan-badge">Angkatan III</span>
                    </div>
                    <div class="module-image">
                        <img src="https://hystax.com/wp-content/uploads/2024/01/Advantages-and-limitations-of-embracing-AWS-as-a-cloud-infrastructure-1200x675.webp" alt="Modul AWS">>
                    </div>
                    <div class="module-content">
                        <h2 class="module-title">AWS Cloud Computing untuk Pemula</h2>
                        <div class="module-meta">
                            <div class="meta-item">
                                <i class="fa-regular fa-calendar"></i>
                                <span>01 Jun 2026 - 08 Jun 2026</span>
                            </div>
                            <div class="meta-item">
                                <i class="fa-solid fa-star"></i>
                                <span>4.8</span>
                            </div>
                        </div>
                        <a href="https://pdfs.semanticscholar.org/fb7d/4f04cd497f89594ee408962b7ddf0a615b83.pdf" 
                           class="module-button" target="_blank">
                            <i class="fa-solid fa-download"></i> Unduh Modul
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- JavaScript Logic -->
    <script>
        // MODUL FILTER & SEARCH LOGIC
        document.addEventListener('DOMContentLoaded', function() {
            
            // Elemen-elemen
            const filterSelect = document.getElementById('angkatanFilter');
            const filterButton = document.getElementById('filterBtn');
            const searchInput = document.getElementById('searchInput');
            const clearSearchBtn = document.getElementById('clearSearch');
            const moduleCards = document.querySelectorAll('.module-card');
            const countDisplay = document.getElementById('countDisplay');
            const modulesGrid = document.getElementById('modulesGrid');

            // State
            let currentFilter = 'Semua Pelatihan';
            let currentSearch = '';

            // Fungsi untuk filter dan search modul
            function applyFilters() {
                let visibleCount = 0;

                moduleCards.forEach((card, index) => {
                    const cardAngkatan = card.dataset.angkatan;
                    const cardTitle = card.dataset.title;
                    
                    // Cek filter angkatan
                    const angkatanMatch = currentFilter === 'Semua Pelatihan' || 
                                         cardAngkatan === currentFilter;
                    
                    // Cek search
                    const searchMatch = currentSearch === '' || 
                                       cardTitle.includes(currentSearch.toLowerCase());
                    
                    // Tampilkan jika match semua kriteria
                    const showCard = angkatanMatch && searchMatch;
                    
                    if (showCard) {
                        card.style.display = 'block';
                        card.style.opacity = '0';
                        card.style.transform = 'translateY(20px)';
                        
                        // Animasi muncul
                        setTimeout(() => {
                            card.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                            card.style.opacity = '1';
                            card.style.transform = 'translateY(0)';
                        }, 50 * index);
                        
                        visibleCount++;
                    } else {
                        card.style.display = 'none';
                    }
                });

                // Update jumlah
                if (countDisplay) {
                    countDisplay.textContent = visibleCount;
                }

                // Tampilkan pesan jika tidak ada hasil
                showNoResultsMessage(visibleCount);
            }

            // Fungsi untuk menampilkan pesan "tidak ada hasil"
            function showNoResultsMessage(count) {
                const existingMessage = document.querySelector('.no-results-message');
                if (existingMessage) {
                    existingMessage.remove();
                }

                if (count === 0) {
                    const message = document.createElement('div');
                    message.className = 'no-results-message';
                    message.innerHTML = `
                        <i class="fa-regular fa-face-frown" style="font-size: 3rem; color: #cbd5e0; margin-bottom: 1rem;"></i>
                        <h3 style="font-size: 1.5rem; font-weight: 600; color: #2d3748; margin-bottom: 0.5rem;">
                            Tidak ada hasil ditemukan
                        </h3>
                        <p style="color: #718096; margin-bottom: 1.5rem;">
                            Coba ubah filter atau kata kunci pencarian Anda
                        </p>
                        <button onclick="resetFilters()" style="
                            background: #4299e1;
                            color: white;
                            border: none;
                            padding: 0.75rem 1.5rem;
                            border-radius: 8px;
                            font-weight: 600;
                            cursor: pointer;
                            transition: background 0.3s;
                        ">
                            Reset Filter
                        </button>
                    `;
                    modulesGrid.appendChild(message);
                }
            }

            // Fungsi reset filters
            window.resetFilters = function() {
                filterSelect.value = 'Semua Pelatihan';
                searchInput.value = '';
                clearSearchBtn.style.display = 'none';
                currentFilter = 'Semua Pelatihan';
                currentSearch = '';
                applyFilters();
            };

            // Event: Filter button click
            if (filterButton) {
                filterButton.addEventListener('click', function() {
                    currentFilter = filterSelect.value;
                    applyFilters();
                    
                    // Feedback visual
                    filterButton.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Memproses...';
                    setTimeout(() => {
                        filterButton.innerHTML = '<i class="fa-solid fa-filter"></i> Filter';
                    }, 500);
                });
            }

            // Event: Search input
            if (searchInput) {
                searchInput.addEventListener('input', function() {
                    currentSearch = this.value.trim();
                    
                    // Tampilkan/hide clear button
                    clearSearchBtn.style.display = currentSearch ? 'block' : 'none';
                    
                    applyFilters();
                });

                // Clear search on ESC
                searchInput.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape') {
                        this.value = '';
                        currentSearch = '';
                        clearSearchBtn.style.display = 'none';
                        applyFilters();
                    }
                });
            }

            // Event: Clear search button
            if (clearSearchBtn) {
                clearSearchBtn.addEventListener('click', function() {
                    searchInput.value = '';
                    currentSearch = '';
                    this.style.display = 'none';
                    applyFilters();
                });
            }

            // Event: Enter key di search atau filter
            if (searchInput) {
                searchInput.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        applyFilters();
                    }
                });
            }

            if (filterSelect) {
                filterSelect.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        currentFilter = this.value;
                        applyFilters();
                    }
                });
            }

            // Filter keyboard shortcuts
            document.addEventListener('keydown', function(e) {
                // Ctrl + F untuk focus search
                if (e.ctrlKey && e.key === 'f') {
                    e.preventDefault();
                    if (searchInput) {
                        searchInput.focus();
                    }
                }
                
                // Ctrl + Shift + F untuk reset
                if (e.ctrlKey && e.shiftKey && e.key === 'f') {
                    e.preventDefault();
                    resetFilters();
                }
            });

            // Initial filter
            applyFilters();

            // Toast notification helper
            function showToast(message, type = 'info') {
                // Remove existing toast
                const existing = document.querySelector('.toast-notification');
                if (existing) existing.remove();

                const toast = document.createElement('div');
                toast.className = 'toast-notification';
                toast.innerHTML = `
                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                        <i class="fa-solid fa-${type === 'success' ? 'check-circle' : 'info-circle'}"></i>
                        <span>${message}</span>
                    </div>
                `;

                document.body.appendChild(toast);

                // Animate in
                setTimeout(() => {
                    toast.style.transform = 'translateX(0)';
                }, 100);

                // Auto remove after 3 seconds
                setTimeout(() => {
                    toast.style.transform = 'translateX(400px)';
                    setTimeout(() => toast.remove(), 300);
                }, 3000);
            }

            // Success message on page load
            setTimeout(() => {
                showToast('Halaman modul berhasil dimuat!', 'success');
            }, 500);
        });
    </script>
</body>
</html>