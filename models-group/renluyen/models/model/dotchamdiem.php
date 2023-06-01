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

class dotchamdiem extends Database {

    public function dotchamdiem__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM dotchamdiem");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }
    
    public function dotchamdiem__Add($ten_dot, $ghi_chu, $thoi_gian_bat_dau, $thoi_gian_ket_thuc, $id_hoc_ky) {
        $obj = $this->connect->prepare("INSERT INTO dotchamdiem(ten_dot, ghi_chu, thoi_gian_bat_dau, thoi_gian_ket_thuc, id_hoc_ky) VALUES (?,?,?,?,?)");
        $obj->execute(array($ten_dot, $ghi_chu, $thoi_gian_bat_dau, $thoi_gian_ket_thuc, $id_hoc_ky));
        return $obj->rowCount();
    }

    public function dotchamdiem__Update($id_dot, $ten_dot, $ghi_chu, $thoi_gian_bat_dau, $thoi_gian_ket_thuc, $id_hoc_ky) {
        $obj = $this->connect->prepare("UPDATE dotchamdiem SET ten_dot=?, ghi_chu=?, thoi_gian_bat_dau=?, thoi_gian_ket_thuc=?, id_hoc_ky=? WHERE id_dot");
        $obj->execute(array($ten_dot, $ghi_chu, $thoi_gian_bat_dau, $thoi_gian_ket_thuc, $id_hoc_ky, $id_dot));
        return $obj->rowCount();
    }
    

    public function dotchamdiem__Delete($id_dot) {
        $obj = $this->connect->prepare("DELETE FROM dotchamdiem WHERE id_dot= ?");
        $obj->execute(array($id_dot));
        return $obj->rowCount();
    }

  
    public function dotchamdiem__Get_By_Id($id_dot) {
        $obj = $this->connect->prepare("SELECT * FROM dotchamdiem WHERE id_dot= ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_dot));
        return $obj->fetch();
    }

    public function dotchamdiem__Get_By_Id_Hoc_Ky($id_hoc_ky) {
        $obj = $this->connect->prepare("SELECT * FROM dotchamdiem WHERE id_hoc_ky= ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_hoc_ky));
        return $obj->fetchAll();
    }
}
?>