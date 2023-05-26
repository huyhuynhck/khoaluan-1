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

class sinhvien extends Database {

    public function sinhvien__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM sinhvien");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }
    
    public function sinhvien__Add($ma_sinh_vien, $ten_sinh_vien, $gioi_tinh, $ngay_sinh, $email, $so_dien_thoai_1, $so_dien_thoai_2, $dia_chi_lien_lac, $dia_chi_thuong_tru, $id_lop_hoc) {
        $obj = $this->connect->prepare("INSERT INTO sinhvien(ma_sinh_vien, ten_sinh_vien, gioi_tinh, ngay_sinh, email, so_dien_thoai_1, so_dien_thoai_2, dia_chi_lien_lac, dia_chi_thuong_tru, id_lop_hoc) VALUES (?,?,?,?,?,?,?,?,?,?)");
        $obj->execute(array($ma_sinh_vien, $ten_sinh_vien, $gioi_tinh, $ngay_sinh, $email, $so_dien_thoai_1, $so_dien_thoai_2, $dia_chi_lien_lac, $dia_chi_thuong_tru, $id_lop_hoc));
        return $obj->rowCount();
    }

    public function sinhvien__Update($id_sinh_vien, $ma_sinh_vien, $ten_sinh_vien, $gioi_tinh, $ngay_sinh, $email, $so_dien_thoai_1, $so_dien_thoai_2, $dia_chi_lien_lac, $dia_chi_thuong_tru, $id_lop_hoc) {
        $obj = $this->connect->prepare("UPDATE sinhvien SET ma_sinh_vien=?, ten_sinh_vien=?, gioi_tinh=?, ngay_sinh=?, email=?, so_dien_thoai_1=?, so_dien_thoai_2=?, dia_chi_lien_lac=?, dia_chi_thuong_tru=?, id_lop_hoc=? WHERE id_sinh_vien=?");
        $obj->execute(array($ma_sinh_vien, $ten_sinh_vien, $gioi_tinh, $ngay_sinh, $email, $so_dien_thoai_1, $so_dien_thoai_2, $dia_chi_lien_lac, $dia_chi_thuong_tru, $id_lop_hoc, $id_sinh_vien));
        return $obj->rowCount();
    }
    

    public function sinhvien__Delete($id_sinh_vien) {
        $obj = $this->connect->prepare("DELETE FROM sinhvien WHERE id_sinh_vien = ?");
        $obj->execute(array($id_sinh_vien));
        return $obj->rowCount();
    }

  
    public function sinhvien__Get_By_Id($id_sinh_vien) {
        $obj = $this->connect->prepare("SELECT * FROM sinhvien WHERE id_sinh_vien = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_sinh_vien));
        return $obj->fetch();
    }

    public function sinhvien__Get_By_Id_Lop_Hoc($id_lop_hoc) {
        $obj = $this->connect->prepare("SELECT * FROM sinhvien WHERE id_lop_hoc = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_lop_hoc));
        return $obj->fetchAll();
    }

}
?>