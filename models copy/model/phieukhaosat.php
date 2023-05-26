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

class phieukhaosat extends Database {

    public function phieukhaosat__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM phieukhaosat");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }
    
    public function phieukhaosat__Add($id_doi_tuong, $id_ap_dung, $ket_qua, $ngay_thuc_hien) {
        $obj = $this->connect->prepare("INSERT INTO phieukhaosat(id_doi_tuong, id_ap_dung, ket_qua, ngay_thuc_hien) VALUES (?,?,?,?)");
        $obj->execute(array($id_doi_tuong, $id_ap_dung, $ket_qua, $ngay_thuc_hien));
        return $obj->rowCount();
    }

    public function phieukhaosat__Update($id_phieu, $id_doi_tuong, $id_ap_dung, $ket_qua, $ngay_thuc_hien) {
        $obj = $this->connect->prepare("UPDATE phieukhaosat SET id_doi_tuong=?, id_ap_dung, ket_qua=?, ngay_thuc_hien=? WHERE id_phieu=?");
        $obj->execute(array($id_doi_tuong, $id_ap_dung, $ket_qua, $ngay_thuc_hien, $id_phieu));
        return $obj->rowCount();
    }
    

    public function phieukhaosat__Delete($id_phieu) {
        $obj = $this->connect->prepare("DELETE FROM phieukhaosat WHERE id_phieu = ?");
        $obj->execute(array($id_phieu));
        return $obj->rowCount();
    }

  
    public function phieukhaosat__Get_By_Id($id_phieu) {
        $obj = $this->connect->prepare("SELECT * FROM phieukhaosat WHERE id_phieu = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_phieu));
        return $obj->fetch();
    }

    
    public function phieukhaosat__Get_By_Id_Doi_Tuong($id_doi_tuong) {
        $obj = $this->connect->prepare("SELECT * FROM phieukhaosat WHERE id_doi_tuong = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_doi_tuong));
        return $obj->fetchAll();
    }

    public function phieukhaosat__Get_By_Id_Ap_Dung($id_ap_dung) {
        $obj = $this->connect->prepare("SELECT * FROM phieukhaosat WHERE id_ap_dung = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_ap_dung));
        return $obj->fetchAll();
    }
}
?>