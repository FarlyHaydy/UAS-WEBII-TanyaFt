<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            background: url('https://ft.ulm.ac.id/id/wp-content/uploads/2022/08/IMG_20220726_092214.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container {
            display: flex;
            flex-direction: column;
            width: 90%;
            max-width: 500px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            background-color: #fff;
        }
        .form-container {
            width: 100%;
        }
        .form-container h2 {
            margin-bottom: 10px;
            font-size: 1.5rem;
            color: #333;
            text-align: center;
        }
        .form-container p {
            text-align: center;
            margin-bottom: 20px;
            color: #666;
        }
        .form-group {
            margin-bottom: 15px;
            padding: 0 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }
        .form-group .error {
            color: red;
            font-size: 0.875rem;
        }
        .form-group input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 1rem;
            padding: 10px 0;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .form-group a {
            color: #007bff;
            text-decoration: none;
            font-size: 0.875rem;
        }
        .form-group a:hover {
            text-decoration: underline;
        }
        .logo {
            display: block;
            width: 80px;
            height: auto;
            margin: 0 auto 20px;
        }
        .header-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            text-align: center;
            flex-direction: column;
        }
        .header-container img {
            margin-right: 0;
        }
        .header-container h2, .header-container p {
            margin: 0;
        }
        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }
            .form-container h2 {
                font-size: 1.25rem;
            }
            .form-container p {
                font-size: 0.875rem;
            }
            .form-group input {
                font-size: 0.875rem;
            }
            .form-group input[type="submit"] {
                font-size: 0.875rem;
            }
            .form-group a {
                font-size: 0.75rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header-container">
            <img src="<?= base_url('logo-ulm.png'); ?>" alt="Logo" class="logo">
            <h2>Fakultas Teknik</h2>
            <p>Universitas Lambung Mangkurat</p>
        </div>
        <div class="form-container">
            <h2>Daftar Akun Baru</h2>
            <p>Masukkan informasi Anda untuk mendaftar!</p>
            <?php if (session()->getFlashdata('errors')) : ?>
                <div class="form-group">
                    <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                        <span class="error"><?= $error ?></span><br>
                    <?php endforeach ?>
                </div>
            <?php endif; ?>
            <form action="<?= base_url('auth/processRegister'); ?>" method="POST">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="<?= old('username'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?= old('email'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Konfirmasi Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Daftar">
                </div>
                <div class="form-group" style="text-align: center;">
                    <span>Sudah punya akun?</span>
                    <a href="<?= base_url('login'); ?>">Login</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
