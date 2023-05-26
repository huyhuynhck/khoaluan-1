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

class minhchung extends Database {

    public function minhchung__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM minhchung");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }
    
    public function minhchung__Add($ten_minh_chung, $ghi_chu, $hinh_anh, $id_muc) {
        $obj = $this->connect->prepare("INSERT INTO minhchung(ten_minh_chung, ghi_chu, hinh_anh, id_muc) VALUES (?,?,?,?)");
        $obj->execute(array($ten_minh_chung, $ghi_chu, $hinh_anh, $id_muc));
        return $obj->rowCount();
    }

    public function minhchung__Update($id_minh_chung, $ten_minh_chung, $ghi_chu, $hinh_anh, $id_muc) {
        $obj = $this->connect->prepare("UPDATE minhchung SET ten_minh_chung=?, ghi_chu=?, hinh_anh=?, id_muc=? WHERE id_minh_chung=?");
        $obj->execute(array($ten_minh_chung, $ghi_chu, $hinh_anh, $id_muc, $id_minh_chung));
        return $obj->rowCount();
    }
    

    public function minhchung__Delete($id_minh_chung) {
        $obj = $this->connect->prepare("DELETE FROM minhchung WHERE id_minh_chung = ?");
        $obj->execute(array($id_minh_chung));
        return $obj->rowCount();
    }

  
    public function minhchung__Get_By_Id($id_minh_chung) {
        $obj = $this->connect->prepare("SELECT * FROM minhchung WHERE id_minh_chung = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_minh_chung));
        return $obj->fetch();
    }

    public function minhchung__Get_By_id_muc($id_muc) {
        $obj = $this->connect->prepare("SELECT * FROM minhchung WHERE id_muc = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_muc));
        return $obj->fetchAll();
    }
}
?>