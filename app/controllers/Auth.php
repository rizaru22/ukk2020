<?php
class Auth extends Controller{

    public function index(){
        $this->view('auth/login_page');
    }

    public function cek_login(){
        $data['login']=$this->model('Auth_model')->login($_POST);
        if(!empty($data['login'])){
            session_start();
            $_SESSION['username']=$data['login']['username'];
            $_SESSION['nama']=$data['login']['nama'];
            header('location:'.BASEURL.'UC_Masyarakat/');
        }else{
            Flasher::setFlash('Data Masyarakat Tidak Ditemukan','danger');
            header('location:'.BASEURL.'auth/');
            exit;
        }
    }

    public function logout(){
        session_destroy();
        header('location:'.BASEURL.'home/');
        
    }
}