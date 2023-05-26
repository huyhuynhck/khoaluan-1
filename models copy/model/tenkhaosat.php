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

class tenkhaosat extends Database {

    public function tenkhaosat__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM tenkhaosat");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }
    
    public function tenkhaosat__Add($ten_khao_sat, $ghi_chu) {
        $obj = $this->connect->prepare("INSERT INTO tenkhaosat(ten_khao_sat, ghi_chu) VALUES (?,?)");
        $obj->execute(array($ten_khao_sat, $ghi_chu));
        return $obj->rowCount();
    }

    public function tenkhaosat__Update($id_ten_khao_sat, $ten_khao_sat, $ghi_chu) {
        $obj = $this->connect->prepare("UPDATE tenkhaosat SET ten_khao_sat=?, ghi_chu=? WHERE id_ten_khao_sat=?");
        $obj->execute(array($ten_khao_sat, $ghi_chu, $id_ten_khao_sat));
        return $obj->rowCount();
    }
    

    public function tenkhaosat__Delete($id_ten_khao_sat) {
        $obj = $this->connect->prepare("DELETE FROM tenkhaosat WHERE id_ten_khao_sat = ?");
        $obj->execute(array($id_ten_khao_sat));
        return $obj->rowCount();
    }

  
    public function tenkhaosat__Get_By_Id($id_ten_khao_sat) {
        $obj = $this->connect->prepare("SELECT * FROM tenkhaosat WHERE id_ten_khao_sat = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_ten_khao_sat));
        return $obj->fetch();
    }

}
?>