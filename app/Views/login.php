<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            width: 90%;
            max-width: 1200px;
            height: 90%;
            max-height: 700px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
            background-color: #fff;
        }
        .image {
            flex: 1;
            background: url('<?= base_url('helm-ft.png'); ?>') no-repeat center center;
            background-size: cover;
        }
        .form-container {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
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
        }
        .header-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }
        .header-container img {
            margin-right: 10px;
        }
        .header-container h2, .header-container p {
            margin: 0;
            text-align: left;
        }
        .header-container div {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .form-group .link-container {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 0.875rem;
        }
        .form-group .link-container a {
            margin-left: 5px;
        }
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                height: auto;
            }
            .image {
                height: 200px;
            }
            .form-container {
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
            .form-group .link-container {
                font-size: 0.75rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="image"></div>
        <div class="form-container">
            <div class="header-container">
                <img src="<?= base_url('logo-ulm.png'); ?>" alt="Logo" class="logo">
                <div>
                    <h2>Fakultas Teknik</h2>
                    <p>Universitas Lambung Mangkurat</p>
                </div>
            </div>
            <h2>Login ke Akun Anda</h2>
            <p>Masukkan Username dan password untuk login!</p>
            <?php if (session()->getFlashdata('error')) : ?>
                <div class="form-group">
                    <span class="error"><?= session()->getFlashdata('error'); ?></span>
                </div>
            <?php endif; ?>
            <form action="<?= base_url('auth/processLogin'); ?>" method="POST">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="<?= old('username'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Login">
                </div>
                <div class="form-group">
                    <div class="link-container">
                        <span>Belum Mempunyai Akun?</span>
                        <a href="<?= base_url('register'); ?>">Daftar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
