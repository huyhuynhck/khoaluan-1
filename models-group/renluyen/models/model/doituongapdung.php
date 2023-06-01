<?php

$a = "./models/configs/config.php";
$b = "../models/configs/config.php";
$c = "../../models/configs/config.php";
$d = "../../../models/configs/config.php";
$e = "../../../../models/configs/config.php";

if (file_exists($a)) {
    $des = $a;
}
if (file_exists($b)) {
    $des = $b;
}
if (file_exists($c)) {
    $des = $c;
} 
if (file_exists($d)) {
    $des = $d;
} 

if (file_exists($e)) {
    $des = $e;
} 
include_once($des);

class doituongapdung extends Database {

    public function doituongapdung__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM doituongapdung");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }
    
    public function doituongapdung__Add($id_dot, $id_mau_phieu, $id_phan_nhom) {
        $obj = $this->connect->prepare("INSERT INTO doituongapdung(id_dot, id_mau_phieu, id_phan_nhom) VALUES (?,?,?)");
        $obj->execute(array($id_dot, $id_mau_phieu, $id_phan_nhom));
        return $obj->rowCount();
    }

    public function doituongapdung__Update($id_doi_tuong_ap_dung, $id_dot, $id_mau_phieu, $id_phan_nhom) {
        $obj = $this->connect->prepare("UPDATE doituongapdung SET id_dot=?, id_mau_phieu=?, id_phan_nhom=? WHERE id_doi_tuong_ap_dung=?");
        $obj->execute(array($id_dot, $id_mau_phieu, $id_phan_nhom, $id_doi_tuong_ap_dung));
        return $obj->rowCount();
    }
    

    public function doituongapdung__Delete($id_doi_tuong_ap_dung) {
        $obj = $this->connect->prepare("DELETE FROM doituongapdung WHERE id_doi_tuong_ap_dung = ?");
        $obj->execute(array($id_doi_tuong_ap_dung));
        return $obj->rowCount();
    }

  
    public function doituongapdung__Get_By_Id($id_doi_tuong_ap_dung) {
        $obj = $this->connect->prepare("SELECT * FROM doituongapdung WHERE id_doi_tuong_ap_dung = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_doi_tuong_ap_dung));
        return $obj->fetch();
    }

    public function doituongapdung__Get_By_Id_Dot($id_dot) {
        $obj = $this->connect->prepare("SELECT * FROM doituongapdung WHERE id_dot = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_dot));
        return $obj->fetchAll();
    }

    public function doituongapdung__Get_By_Id_Mau_Phieu($id_mau_phieu) {
        $obj = $this->connect->prepare("SELECT * FROM doituongapdung WHERE id_mau_phieu = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_mau_phieu));
        return $obj->fetchAll();
    }

    public function doituongapdung__Get_By_Id_Phan_Nhom($id_phan_nhom) {
        $obj = $this->connect->prepare("SELECT * FROM doituongapdung WHERE id_phan_nhom = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_phan_nhom));
        return $obj->fetchAll();
    }

}
?>