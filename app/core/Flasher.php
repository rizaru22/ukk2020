<?php
class Flasher{

    public static function setFlash($pesan,$tipe){
        $_SESSION['flash']=[
            'pesan'=>$pesan,
            'tipe'=>$tipe
        ];
    }

    public static function flash(){
        if (isset($_SESSION['flash'])){
            echo '<div class="alert alert-'.$_SESSION['flash']['tipe'].'  alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-info"></i> '.$_SESSION['flash']['pesan'].'</h4>
          </div>';
          unset($_SESSION['flash']);
        }
        
    }
}