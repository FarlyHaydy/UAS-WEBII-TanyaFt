<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Team</title>
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
        .team-section {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 2rem;
            padding: 2rem;
        }
        .team-member {
            text-align: center;
            transition: transform 0.3s ease;
            border: 3px solid #e2e8f0; 
            padding: 2rem;
            border-radius: 0.5rem;
            background-color: #ffffff;
        }
        .team-member img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 0.5rem;
            transition: transform 0.3s ease;
        }
        .team-member:hover {
            transform: scale(1.05);
        }
        .team-member:hover img {
            transform: scale(1.1);
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
                            <a href="<?= base_url('profile'); ?>" class="block p-3 text-gray-700 hover:bg-blue-500 hover:text-white rounded-lg active">
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
                        <h2 class="text-2xl font-semibold text-center">My Team</h2>
                        <hr class="my-4">
                        <div class="team-section">
                            <div class="team-member">
                                <img src="<?= base_url('profile1.png'); ?>" alt="Your Name">
                                <h3 class="mt-2 text-lg font-semibold">M. Adi Syahputra</h3>
                                <p class="text-gray-500">2210817210017</p>
                            </div>
                            <div class="team-member">
                                <img src="<?= base_url('profile2.png'); ?>" alt="Friend 1">
                                <h3 class="mt-2 text-lg font-semibold">Muhammad Hafiz Ansari</h3>
                                <p class="text-gray-500">2210817210003</p>
                            </div>
                            <div class="team-member">
                                <img src="<?= base_url('profile3.png'); ?>" alt="Friend 2">
                                <h3 class="mt-2 text-lg font-semibold">Farlyhaydy H.Djalil</h3>
                                <p class="text-gray-500">2210817210006</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
