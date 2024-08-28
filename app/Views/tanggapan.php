<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanggapan Tanya FT</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .logo {
            width: auto;
            height: 50px;
        }

        .sidebar {
            height: 115vh;
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

        .menu a:hover, .menu a.active {
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

        .form-label {
            font-weight: bold;
        }

        .form-control[readonly] {
            background-color: #e9ecef;
        }

        .form-container {
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 0.5rem;
            padding: 2rem;
        }

        .form-container h5 {
            margin-bottom: 1.5rem;
        }

        .btn-primary {
            background-color: #3182ce;
            border-color: #3182ce;
        }

        .btn-primary:hover {
            background-color: #2c5282;
            border-color: #2c5282;
        }

        .btn-secondary {
            background-color: #e2e8f0;
            color: #4a5568;
            border: none;
        }

        .btn-secondary:hover {
            background-color: #cbd5e0;
            color: #2d3748;
        }
    </style>
</head>

<body class="bg-light">
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
                            <a href="<?= base_url('dashboard'); ?>" class="block p-3 text-gray-700 hover:bg-blue-500 hover:text-white rounded-lg">
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
                            <a href="<?= base_url('eResponse'); ?>" class="block p-3 text-gray-700 bg-blue-500 text-white rounded-lg active">
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
                            <a href="#" class="block p-3 text-gray-700 hover:bg-blue-500 hover:text-white rounded-lg">
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
                <div class="form-container">
                    <div class="mb-3">
                        <a href="<?= base_url('eResponse/tanya_ft'); ?>" class="text-blue-500 mb-4">&larr; Kembali</a>
                    </div>
                    <h5 class="fw-bold">Tanggapan Tanya FT</h5>
                    <div class="mb-3">
                        <label class="form-label">Pertanyaan</label>
                        <p class="form-control block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight"><?= $pengajuan['pertanyaan'] ?></p>
                    </div>
                    <a href="<?= base_url('pengajuan/viewBerkas/' . $pengajuan['berkas']) ?>" style="color: blue;" class="mb-4">Cek File</a>
                    <div class="mb-3">
                        <label class="form-label">Jawaban</label>
                        <p class="form-control block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight">Website layanan baru FT ULM dirancang untuk memberikan akses yang mudah dan cepat bagi mahasiswa, dosen, dan staf untuk mengakses berbagai layanan akademik dan administratif. Dengan antarmuka yang responsif dan ramah pengguna, pengguna dapat dengan mudah mengajukan permohonan, mengakses informasi akademik, memantau status pengajuan, dan berinteraksi dengan berbagai fitur lainnya secara efisien.</p>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>
