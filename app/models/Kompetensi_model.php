<?php
class Kompetensi_model{
    private $table='tbl_kompetensi_keahlian';
    private $db;

    public function __construct(){
        $this->db=new Database;
    }
    public function getAllKompetensi(){
        $this->db->query('SELECT * FROM '.$this->table);
        return $this->db->resultSet();

    }

    public function getKompetensiById($id){
        $this->db->query('SELECT * FROM '.$this->table. ' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function tambahDataKompetensi($data){
        $query="INSERT INTO tbl_kompetensi_keahlian values ('',:kode,:kompetensi)";
        $this->db->query($query);
        $this->db->bind('kode',$data['kode']);
        $this->db->bind('kompetensi',$data['kompetensi']);
        $this->db->execute();

        return $this->db->rowCount();

    }

    public function ubahDataKompetensi($data){
        $query="UPDATE tbl_kompetensi_keahlian SET kode_kompetensi=:kode, kompetensi_keahlian=:kompetensi WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id',$data['id']);
        $this->db->bind('kode',$data['kode']);
        $this->db->bind('kompetensi',$data['kompetensi']);
        $this->db->execute();

        return $this->db->rowCount();

    }

    public function hapusDataKompetensi($id){
        $query="DELETE FROM tbl_kompetensi_keahlian WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id',$id);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
