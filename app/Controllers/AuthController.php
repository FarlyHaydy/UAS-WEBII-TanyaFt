<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function login()
    {
        // Menampilkan view login
        return view('login');
    }

    public function register()
    {
        // Menampilkan view register
        return view('register');
    }

    public function processLogin()
    {
        $validation = \Config\Services::validation();

        // Validasi input
        $validation->setRules([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->with('errors', $validation->getErrors());
        }

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $usersModel = new UsersModel();
        $user = $usersModel->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            session()->set([
                'username' => $user['username'],
                'logged_in' => TRUE,
            ]);
            return redirect()->to('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Username atau Password salah!');
        }
    }

    public function processRegister()
    {
        $validation = \Config\Services::validation();

        // Validasi input
        $validation->setRules([
            'username' => 'required|min_length[4]|max_length[20]|is_unique[users.username]',
            'email' => 'required|min_length[4]|max_length[100]|valid_email',
            'password' => 'required|min_length[4]|max_length[50]',
            'confirm_password' => 'matches[password]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->with('errors', $validation->getErrors());
        }

        $usersModel = new UsersModel();

        // Hash the password before storing it
        $hashedPassword = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);

        $usersModel->insert([
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'password' => $hashedPassword,
        ]);

        return redirect()->to('/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
