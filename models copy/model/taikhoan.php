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

class taikhoan extends Database {

    public function taikhoan__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM taikhoan");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }
    
    public function taikhoan__Add($ten_tai_khoan, $mat_khau, $ghi_chu, $id_phan_quyen, $id_phan_nhom, $id_nguoi_dung) {
        $obj = $this->connect->prepare("INSERT INTO taikhoan(ten_tai_khoan, mat_khau, ghi_chu, id_phan_quyen, id_phan_nhom, id_nguoi_dung) VALUES (?,?,?,?,?,?)");
        $obj->execute(array($ten_tai_khoan, $mat_khau, $ghi_chu, $id_phan_quyen, $id_phan_nhom, $id_nguoi_dung));
        return $obj->rowCount();
    }

    public function taikhoan__Update($id_tai_khoan, $ten_tai_khoan, $mat_khau, $ghi_chu, $id_phan_quyen, $id_phan_nhom, $id_nguoi_dung) {
        $obj = $this->connect->prepare("UPDATE taikhoan SET ten_tai_khoan=?, mat_khau=?, ghi_chu=?, id_phan_quyen=?, id_phan_nhom=?, id_nguoi_dung=? WHERE id_tai_khoan=?");
        $obj->execute(array($ten_tai_khoan, $mat_khau, $ghi_chu, $id_phan_quyen, $id_phan_nhom, $id_nguoi_dung, $id_tai_khoan));
        return $obj->rowCount();
    }
    

    public function taikhoan__Delete($id_tai_khoan) {
        $obj = $this->connect->prepare("DELETE FROM taikhoan WHERE id_tai_khoan = ?");
        $obj->execute(array($id_tai_khoan));
        return $obj->rowCount();
    }

  
    public function taikhoan__Get_By_Id($id_tai_khoan) {
        $obj = $this->connect->prepare("SELECT * FROM taikhoan WHERE id_tai_khoan = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_tai_khoan));
        return $obj->fetch();
    }


    public function taikhoan__Get_By_Id_Phan_Quyen($id_phan_quyen) {
        $obj = $this->connect->prepare("SELECT * FROM taikhoan WHERE id_phan_quyen = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_phan_quyen));
        return $obj->fetchAll();
    }

    
    public function taikhoan__Get_By_Id_Phan_Nhom($id_phan_nhom) {
        $obj = $this->connect->prepare("SELECT * FROM taikhoan WHERE id_phan_nhom = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_phan_nhom));
        return $obj->fetchAll();
    }

    public function taikhoan__Get_By_Id_Nguoi_Dung($id_nguoi_dung) {
        $obj = $this->connect->prepare("SELECT * FROM taikhoan WHERE id_nguoi_dung = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_nguoi_dung));
        return $obj->fetchAll();
    }
}
?>