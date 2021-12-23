<?php
namespace App\Controllers;
use App\Models\UsersModel;
class Login extends BaseController
{
 public function index()
 {
 return view('dashboard/login');
 }
 public function process()
 {
 $users = new UsersModel();
 $username = $this->request->getVar('username');
 $password = $this->request->getVar('password');
 $dataUser = $users->where([
 'username' => $username,
 ])->first();
 if ($dataUser) {
 if (password_verify($password, $dataUser->password)) {
 session()->set([
 'username' => $dataUser->username,
 'name' => $dataUser->name,
 'logged_in' => TRUE
 ]);
 return redirect()->to(base_url('user/profile'));
 } else {
 session()->setFlashdata('error', 'Username & Password Salah');
 return redirect()->to(base_url('backend'));
 }
 } else {
 session()->setFlashdata('error', 'Username & Password Salah');
 return redirect()->to(base_url('backend'));
 }
 }
 function logout()
 {
 session()->destroy();
 return redirect()->to(base_url('backend'));
 }
}