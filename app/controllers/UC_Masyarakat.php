<?php

class UC_Masyarakat extends Controller{

    public function __construct(){
        if(empty($_SESSION['username'])){
            header('location:'.BASEURL.'auth/');
        }
    }
    public function index(){
        $this->view('UC_Masyarakat/index');
    }
}