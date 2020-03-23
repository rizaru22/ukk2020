<?php
class Kompetensi extends Controller{
    public function __construct(){
        if (empty($_SESSION['level'])){
            header('location:'.BASEURL.'admin');
        }
    }

    public function index(){
        $data['icon']="fa-home";
        $data['judul']="Kompetensi Keahlian";
        $this->view('template/header',$data);
        $data1['judul_box']="Daftar Kompetensi Keahlian";
        $data1['msy']=$this->model('Kompetensi_model')->getAllKompetensi();
        $this->view('kompetensi/index',$data1);
        $this->view('template/footer');
    }

    public function ubah($id){
        $data['icon']="fa-home";
        $data['judul']="Kompetensi Keahlian";
        $this->view('template/header',$data);
        $data['judul_box']="Ubah Data Kompetensi";
        $data['kom']=$this->model('Kompetensi_model')->getKompetensiById($id);
        $this->view('kompetensi/ubah',$data);
        $this->view('template/footer');
    }


    public function tambah(){
        $data['icon']="fa-home";
        $data['judul']="Kompetensi";
        $this->view('template/header',$data);
        $data['judul_box']="Tambah Data Kompetensi";
        $this->view('kompetensi/tambah',$data);
        $this->view('template/footer');
    }

    public function tambah_data(){
        if($this->model('Kompetensi_model')->tambahDataKompetensi($_POST)>0){
            Flasher::setFlash('Data kompetensi berhasil ditambah','success');
            header('location:'.BASEURL.'kompetensi');
            exit;
        }else{
            Flasher::setFlash('Data kompetensi gagal ditambah','danger');
            header('location:'.BASEURL.'kompetensi');
            exit;
        }

    }

    public function ubah_data(){
        if($this->model('Kompetensi_model')->ubahDataKompetensi($_POST)>0){
            Flasher::setFlash('Data kompetensi berhasil diubah','success');
            header('location:'.BASEURL.'kompetensi');
            exit;
        }else{
            Flasher::setFlash('Data kompetensi gagal diubah','danger');
            header('location:'.BASEURL.'kompetensi');
            exit;
        }
    }

    

    public function hapus($id){
        if($this->model('Kompetensi_model')->hapusDataKompetensi($id)>0){
            Flasher::setFlash('Data kompetensi berhasil dihapus','warning');
            header('location:'.BASEURL.'kompetensi');
            exit;
        }else{
            Flasher::setFlash('Data kompetensi gagal dihapus','danger');
            header('location:'.BASEURL.'kompetensi');
            exit;
        }

    }
}