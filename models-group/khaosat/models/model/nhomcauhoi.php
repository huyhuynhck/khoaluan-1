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

class nhomcauhoi extends Database {

    public function nhomcauhoi__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM nhomcauhoi");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }
    
    public function nhomcauhoi__Add($ten_nhom_cau_hoi, $ghi_chu, $thu_tu, $id_ten_khao_sat) {
        $obj = $this->connect->prepare("INSERT INTO nhomcauhoi(ten_nhom_cau_hoi, ghi_chu, thu_tu, id_ten_khao_sat) VALUES (?,?,?,?)");
        $obj->execute(array($ten_nhom_cau_hoi, $ghi_chu, $thu_tu, $id_ten_khao_sat));
        return $obj->rowCount();
    }

    public function nhomcauhoi__Update($id_nhom_cau_hoi, $ten_nhom_cau_hoi, $ghi_chu, $thu_tu, $id_ten_khao_sat) {
        $obj = $this->connect->prepare("UPDATE nhomcauhoi SET ten_nhom_cau_hoi=?, ghi_chu=?, thu_tu=?, id_ten_khao_sat=? WHERE id_nhom_cau_hoi=?");
        $obj->execute(array($ten_nhom_cau_hoi, $ghi_chu, $thu_tu, $id_ten_khao_sat, $id_nhom_cau_hoi));
        return $obj->rowCount();
    }
    

    public function nhomcauhoi__Delete($id_nhom_cau_hoi) {
        $obj = $this->connect->prepare("DELETE FROM nhomcauhoi WHERE id_nhom_cau_hoi = ?");
        $obj->execute(array($id_nhom_cau_hoi));
        return $obj->rowCount();
    }

  
    public function nhomcauhoi__Get_By_Id($id_nhom_cau_hoi) {
        $obj = $this->connect->prepare("SELECT * FROM nhomcauhoi WHERE id_nhom_cau_hoi = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_nhom_cau_hoi));
        return $obj->fetch();
    }

    public function nhomcauhoi__Get_By_Id_ten_khao_sat($id_ten_khao_sat) {
        $obj = $this->connect->prepare("SELECT * FROM nhomcauhoi WHERE id_ten_khao_sat = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_ten_khao_sat));
        return $obj->fetchAll();
    }

}
?>