<?php
 class Admin extends Controller{

    public function index(){
        if(!empty($_SESSION['username'])){
            if (!empty($_SESSION['level'])){
                $data['icon']="fa-home";
                $data['judul']="Dashboard";           
                $this->view('template/header',$data);
                $this->view('template/header');
                $this->view('admin/index');
                $this->view('template/footer');
                
            }else{
                $this->view('admin/login');    
            }
        }else{
            $this->view('admin/login');
        }

    }

    public function cek_login(){
        $data['login_admin']=$this->model('Admin_model')->login($_POST);
        if(!empty($data['login_admin'])){
            session_start();
            $_SESSION['username']=$data['login_admin']['username'];
            $_SESSION['level']=$data['login_admin']['user_level']; 
            header('location:'.BASEURL.'admin/');
        }else{
            Flasher::setFlash('Data Pengguna Tidak Ditemukan','danger');
            header('location:'.BASEURL.'admin/login');
            exit;
        }
    }

    public function logout(){
        session_destroy();
        header('location:'.BASEURL.'admin/login');
    }
 }