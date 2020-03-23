<?php

class About extends Controller{

    public function index($nama='Safrizal',$pekerjaan='Guru'){
        $data['icon']="fa-home";
        $data['judul']="Masyarakat";
        $this->view('template/header',$data);
        $data1['nama']=$nama;
        $data1['pekerjaan']=$pekerjaan;
       $this->view('about/index',$data1);
       $this->view('template/footer');
    }
    public function page(){
        $this->view('about/page');
    }
}