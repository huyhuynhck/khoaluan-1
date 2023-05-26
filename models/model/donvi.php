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

class donvi extends Database {

    public function donvi__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM donvi");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }
    
    public function donvi__Add($ten_don_vi, $ghi_chu, $is_khoa) {
        $obj = $this->connect->prepare("INSERT INTO donvi(ten_don_vi, ghi_chu, is_khoa) VALUES (?,?,?)");
        $obj->execute(array($ten_don_vi, $ghi_chu, $is_khoa));
        return $obj->rowCount();
    }

    public function donvi__Update($id_don_vi, $ten_don_vi, $ghi_chu, $is_khoa) {
        $obj = $this->connect->prepare("UPDATE donvi SET ten_don_vi=?, ghi_chu=?, is_khoa=? WHERE id_don_vi=?");
        $obj->execute(array($ten_don_vi, $ghi_chu, $is_khoa, $id_don_vi));
        return $obj->rowCount();
    }
    

    public function donvi__Delete($id_don_vi) {
        $obj = $this->connect->prepare("DELETE FROM donvi WHERE id_don_vi = ?");
        $obj->execute(array($id_don_vi));
        return $obj->rowCount();
    }

  
    public function donvi__Get_By_Id($id_don_vi) {
        $obj = $this->connect->prepare("SELECT * FROM donvi WHERE id_don_vi = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_don_vi));
        return $obj->fetch();
    }

}
?>