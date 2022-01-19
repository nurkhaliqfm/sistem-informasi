<?php

namespace App\Controllers;

class Login extends BaseController
{

    public function index()
    {
        if (session()->get('user_level') == 'admin') {
            return redirect()->to(base_url('admin'));
        }

        return view('home');
    }

    public function auth()
    {
        $users = $this->usersModel;
        $cek = $users->where(['username' => $this->request->getVar('username')])->first();
        if ($cek) {
            $user_level = $cek['level_user'];
            $cek_password = $users->where(['username' => $cek['username'], 'password' => $this->request->getVar('password')])->first();
            if ($cek_password) {
                session()->set([
                    'username' => $this->request->getVar('username'),
                    'password' => $this->request->getVar('password'),
                    'logged_in' => true,
                    'user_level' => $user_level
                ]);

                $users->save([
                    'id' => $cek['id'],
                    'last_login' => date('Y-m-d H:i:s')
                ]);

                session()->setFlashdata('success', 'Login Berhasil');
                return redirect()->to(base_url('admin'));
            } else {
                session()->setFlashdata('wrong_pass', 'Password Anda Salah');
                return redirect()->to(base_url('home'));
            }
        } else {
            session()->setFlashdata('user_or_pass', 'Username atau Password Anda Salah');
            return redirect()->to(base_url('home'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('home'));
    }
}
