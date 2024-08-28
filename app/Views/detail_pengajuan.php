<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengajuan</title>
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
            border-radius: 0.25rem;
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

        .form-control[readonly] {
            background-color: #e9ecef;
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
                            <a href="<?= base_url('eResponse'); ?>" class="block p-3 text-gray-700 hover:bg-blue-500 hover:text-white rounded-lg active">
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
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="p-5">
                    <a href="<?= base_url('eResponse/tanya_ft'); ?>" style="color: blue;" class="mb-4">&larr; Kembali</a>
                        <h1 class="h3 mb-4">Detail Pengajuan</h1>
                        <div class="p-5">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 font-bold mb-2">ID Pengajuan</label>
                                    <input type="text" class="form-control block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" value="<?= $pengajuan['id'] ?>" readonly>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-bold mb-2">Status Pengajuan</label>
                                    <input type="text" class="form-control block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" value="<?= $pengajuan['status'] ?>" readonly>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                <div>
                                    <label class="block text-gray-700 font-bold mb-2">Tanggal Pengajuan</label>
                                    <input type="text" class="form-control block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" value="<?= date('d F Y', strtotime($pengajuan['tanggal_pengajuan'])) ?>" readonly>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-bold mb-2">Nama Lengkap</label>
                                    <input type="text" class="form-control block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" value="<?= $pengajuan['nama'] ?>" readonly>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                <div>
                                    <label class="block text-gray-700 font-bold mb-2">NIM</label>
                                    <input type="text" class="form-control block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" value="<?= $pengajuan['nim'] ?>" readonly>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-bold mb-2">Program Studi</label>
                                    <input type="text" class="form-control block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" value="<?= $pengajuan['program_studi'] ?>" readonly>
                                </div>
                            </div>
                            <div class="mt-4">
                                <label class="block text-gray-700 font-bold mb-2">Pertanyaan</label>
                                <textarea class="form-control block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" rows="4" readonly><?= $pengajuan['pertanyaan'] ?></textarea>
                            </div>
                            <div class="mt-4">
                                <label class="block text-gray-700 font-bold mb-2">Berkas Pendukung</label><br>
                                <?php if (isset($pengajuan['berkas'])) : ?>
                                    <a href="<?= base_url('pengajuan/viewBerkas/' . $pengajuan['berkas']) ?>" style="color: blue;" class="mb-4">Cek File</a>
                                <?php else : ?>
                                     <p class="text-muted">Tidak ada berkas pendukung.</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>
