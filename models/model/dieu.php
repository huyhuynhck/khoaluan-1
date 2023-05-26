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

class dieu extends Database {

    public function dieu__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM dieu");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }
    
    public function dieu__Add($ten_dieu, $ghi_chu, $thu_tu, $id_mau_phieu) {
        $obj = $this->connect->prepare("INSERT INTO dieu(ten_dieu, ghi_chu, thu_tu, id_mau_phieu) VALUES (?,?,?,?)");
        $obj->execute(array($ten_dieu, $ghi_chu, $thu_tu, $id_mau_phieu));
        return $obj->rowCount();
    }

    public function dieu__Update($id_dieu, $ten_dieu, $ghi_chu, $thu_tu, $id_mau_phieu) {
        $obj = $this->connect->prepare("UPDATE dieu SET ten_dieu=?, ghi_chu=?, thu_tu=?, id_mau_phieu=? WHERE id_dieu=?");
        $obj->execute(array($ten_dieu, $ghi_chu, $thu_tu, $id_mau_phieu, $id_dieu));
        return $obj->rowCount();
    }
    

    public function dieu__Delete($id_dieu) {
        $obj = $this->connect->prepare("DELETE FROM dieu WHERE id_dieu = ?");
        $obj->execute(array($id_dieu));
        return $obj->rowCount();
    }

  
    public function dieu__Get_By_Id($id_dieu) {
        $obj = $this->connect->prepare("SELECT * FROM dieu WHERE id_dieu = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_dieu));
        return $obj->fetch();
    }

    public function dieu__Get_By_Id_Mau_Phieu($id_mau_phieu) {
        $obj = $this->connect->prepare("SELECT * FROM dieu WHERE id_mau_phieu = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_mau_phieu));
        return $obj->fetchAll();
    }
}
?>