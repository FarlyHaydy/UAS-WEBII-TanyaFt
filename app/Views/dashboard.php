<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Fakultas Teknik</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .logo {
            width: auto;
            height: 50px;
        }

        .sidebar {
            height: 120vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .menu a {
            display: flex;
            align-items: center;
            padding: 1rem;
            text-decoration: none;
            color: #4a5568;
        }

        .menu a:hover,
        .menu a.active {
            background-color: #3182ce;
            color: #ffffff;
        }

        .menu a i {
            margin-right: 1rem;
        }

        .logout {
            display: flex;
            align-items: center;
            padding: 1rem;
            text-decoration: none;
            color: #4a5568;
        }

        .logout:hover {
            background-color: #3182ce;
            color: #ffffff;
        }

        .logout i {
            margin-right: 1rem;
        }

        .info-card {
            display: flex;
            align-items: center;
            padding: 1rem;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 0.5rem;
            margin-bottom: 1rem;
        }

        .info-card i {
            font-size: 2rem;
            color: #4a5568;
            margin-right: 1rem;
        }

        .info-card:hover {
            background-color: #3182ce;
            color: #ffffff;
            
        }

        .info-card:hover i {
            color: #ffffff;
            
        }

        .welcome-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .welcome-text {
            flex: 1;
        }

        .welcome-image {
            flex: 1;
            text-align: right;
        }

        .welcome-image img {
            max-width: 100%;
            height: auto;
            animation: bounce 3s infinite;
        }

        @keyframes bounce {
            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-30px);
            }

            60% {
                transform: translateY(-15px);
            }
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <nav class="w-1/5 bg-white p-5 shadow-lg sidebar flex flex-col justify-between">
            <div>
                <div class="text-center mb-4">
                    <img src="<?= base_url('logo-ulm.png'); ?>" alt="Logo" class="w-24 mx-auto">
                    <h5 class="mt-2 text-lg font-semibold">Fakultas Teknik</h5>
                    <p class="text-sm text-gray-500">Universitas Lambung Mangkurat</p>
                </div>
                <aside class="menu">
                    <ul>
                        <li class="mb-2">
                            <a href="<?= base_url('dashboard'); ?>" class="block p-3 text-gray-700 bg-blue-500 text-white rounded-lg active">
                                <i class="fas fa-tachometer-alt"></i> Dashboard
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="block p-3 text-gray-700 hover:bg-blue-500 hover:text-white rounded-lg">
                                <i class="fas fa-envelope"></i> e-Services
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="block p-3 text-gray-700 hover:bg-blue-500 hover:text-white rounded-lg">
                                <i class="fas fa-server"></i> e-Command Center
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="<?= base_url('eResponse'); ?>" class="block p-3 text-gray-700 hover:bg-blue-500 hover:text-white rounded-lg">
                                <i class="fas fa-comments"></i> e-Response
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="block p-3 text-gray-700 hover:bg-blue-500 hover:text-white rounded-lg">
                                <i class="fas fa-shopping-cart"></i> e-Commerce
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="block p-3 text-gray-700 hover:bg-blue-500 hover:text-white rounded-lg">
                                <i class="fas fa-briefcase"></i> e-Office
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="block p-3 text-gray-700 hover:bg-blue-500 hover:text-white rounded-lg">
                                <i class="fas fa-clipboard"></i> Kuesioner
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="block p-3 text-gray-700 hover:bg-blue-500 hover:text-white rounded-lg">
                                <i class="fas fa-question-circle"></i> FAQ
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="<?= base_url('profile');?>" class="block p-3 text-gray-700 hover:bg-blue-500 hover:text-white rounded-lg">
                                <i class="fas fa-user"></i> Profile
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="<?= base_url('logout'); ?>" class="logout block p-3 text-gray-700 hover:bg-blue-500 hover:text-white rounded-lg">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </li>
                    </ul>
                </aside>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="bg-white p-4 shadow-lg flex items-center justify-between">
                <div class="flex items-center">
                    <img src="<?= base_url('logo-ulm.png'); ?>" alt="Logo" class="logo">
                    <div>
                        <h1 class="text-xl font-semibold">Fakultas Teknik</h1>
                        <p class="text-sm text-gray-500">Universitas Lambung Mangkurat</p>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <input type="text" placeholder="Cari Layanan..." class="border rounded-lg py-2 px-4">
                    <button class="relative">
                        <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118.6 15H5.4a2.032 2.032 0 01-1.995-1.995L3 5h18m-9 4h.01M10 4h4a1 1 0 011 1v1h-6V5a1 1 0 011-1z"></path>
                        </svg>
                        <span class="absolute top-0 right-0 inline-block w-2 h-2 bg-red-500 rounded-full"></span>
                    </button>
                    <div class="flex items-center">
                        <img src="<?= base_url('foto-profile.png'); ?>" alt="User Avatar" class="w-10 h-10 rounded-full">
                        <span class="ml-2 font-semibold"><?= session()->get('username'); ?></span>
                    </div>
                </div>
            </header>

            <!-- Content -->
            <main class="p-5 flex-1 overflow-y-auto">
                <div class="info-card mb-5">
                    <i class="fas fa-tachometer-alt"></i>
                    <div>
                        <h4 class="text-xl font-semibold">Dashboard</h4>
                        <p class="text-gray-500">Akses menu dan informasi penting lainnya di sini</p>
                    </div>
                </div>
                <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-5" role="alert">
                    <p class="font-bold">Kamu belum mengisi kuisioner pada periode semester ini, Silahkan isi Kuisioner <a href="#" class="underline text-blue-500">Disini</a></p>
                    <p>Kamu tidak dapat melakukan pengajuan layanan jika belum mengisi kuisioner. Oleh karena itu, kami mengharapkan agar setiap mahasiswa mengisi kuisioner pada awal setiap semester sebagai bagian dari proses yang diperlukan untuk memberikan pelayanan yang terbaik dan peningkatan kualitas serta evaluasi layanan FT ULM.</p>
                </div>
                <div class="bg-blue-500 text-white p-5 rounded-lg mb-5 welcome-container">
                    <div class="welcome-text">
                        <h4 class="text-xl font-semibold">Selamat Datang <?= session()->get('username'); ?>!</h4>
                        <p>Di website ini kamu dapat mengajukan layanan dan mengecek status pengajuannya</p>
                    </div>
                    <div class="welcome-image">
                        <img src="<?= base_url('foto-dashboard.png'); ?>" alt="Welcome Image">
                    </div>
                </div>
                <div class="grid grid-cols-4 gap-5 mb-5">
                    <div class="bg-white p-5 shadow-lg rounded-lg text-center transition transform hover:scale-105 cursor-pointer">
                        <h5 class="text-2xl font-semibold">4</h5>
                        <p class="text-gray-500">Layanan diajukan</p>
                    </div>
                    <div class="bg-white p-5 shadow-lg rounded-lg text-center transition transform hover:scale-105 cursor-pointer">
                        <h5 class="text-2xl font-semibold">2</h5>
                        <p class="text-gray-500">Menunggu persetujuan</p>
                    </div>
                    <div class="bg-white p-5 shadow-lg rounded-lg text-center transition transform hover:scale-105 cursor-pointer">
                        <h5 class="text-2xl font-semibold">1</h5>
                        <p class="text-gray-500">Layanan disetujui</p>
                    </div>
                    <div class="bg-white p-5 shadow-lg rounded-lg text-center transition transform hover:scale-105 cursor-pointer">
                        <h5 class="text-2xl font-semibold">1</h5>
                        <p class="text-gray-500">Layanan ditolak</p>
                    </div>
                </div>
                <h5 class="text-xl font-semibold mb-5">Mungkin yang kamu butuhkan</h5>
                <div class="grid grid-cols-3 gap-5">
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden transition transform hover:scale-105 cursor-pointer">
                        <img src="<?= base_url('surat-lulus.png'); ?>" class="w-full h-32 object-cover">
                        <div class="p-5">
                            <h5 class="text-lg font-semibold">Surat Keterangan Lulus</h5>
                            <p class="text-gray-500">Dapatkan Surat Kelulusan dengan Mudah Melalui Layanan Pengajuan Surat Keterangan Lulus kami.</p>
                        </div>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden transition transform hover:scale-105 cursor-pointer">
                        <img src="<?= base_url('surat-pkl.png'); ?>" class="w-full h-32 object-cover">
                        <div class="p-5">
                            <h5 class="text-lg font-semibold">Surat Pengantar Izin PKL</h5>
                            <p class="text-gray-500">Bergabunglah dalam Pengalaman Belajar di Dunia Nyata, dapatkan Surat Pengantar Izin PKL.</p>
                        </div>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden transition transform hover:scale-105 cursor-pointer">
                        <img src="<?= base_url('surat-penelitian.png'); ?>" class="w-full h-32 object-cover">
                        <div class="p-5">
                            <h5 class="text-lg font-semibold">Surat Pengantar Izin Penelitian</h5>
                            <p class="text-gray-500">Mendapatkan Izin Penelitian dengan Mudah melalui Layanan Pengajuan Surat Pengantar Izin Penelitian.</p>
                        </div>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden transition transform hover:scale-105 cursor-pointer">
                        <img src="<?= base_url('permintaan-data.png'); ?>" class="w-full h-32 object-cover">
                        <div class="p-5">
                            <h5 class="text-lg font-semibold">Permintaan Data MK/PKL/TA</h5>
                            <p class="text-gray-500">Pengajuan Surat Permintaan Data Mata Kuliah / Praktik Kerja Lapangan / Tugas Akhir Mahasiswa FT ULM.</p>
                        </div>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden transition transform hover:scale-105 cursor-pointer">
                        <img src="<?= base_url('surat-tugas.png'); ?>" class="w-full h-32 object-cover">
                        <div class="p-5">
                            <h5 class="text-lg font-semibold">Surat Tugas KP/TA</h5>
                            <p class="text-gray-500">Pengajuan Surat Tugas untuk Kerja Praktik / Tugas Akhir Mahasiswa Fakultas Teknik Universitas Lambung Mangkurat.</p>
                        </div>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden transition transform hover:scale-105 cursor-pointer">
                        <img src="<?= base_url('mbkm-ft-ulm.png'); ?>" class="w-full h-32 object-cover">
                        <div class="p-5">
                            <h5 class="text-lg font-semibold">MBKM FT ULM</h5>
                            <p class="text-gray-500">Layanan ini digunakan untuk pendataan dan penerbitan Surat Tugas pelaksanaan program MBKM FT ULM.</p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
