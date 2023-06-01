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

class canbo extends Database {

    public function canbo__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM canbo");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }
    
    public function canbo__Add($ma_can_bo, $ten_can_bo, $gioi_tinh, $ngay_sinh, $email, $so_dien_thoai_1, $so_dien_thoai_2, $dia_chi_lien_lac, $dia_chi_thuong_tru, $id_trinh_do, $id_don_vi) {
        $obj = $this->connect->prepare("INSERT INTO canbo(ma_can_bo, ten_can_bo, gioi_tinh, ngay_sinh, email, so_dien_thoai_1, so_dien_thoai_2, dia_chi_lien_lac, dia_chi_thuong_tru, id_trinh_do, id_don_vi) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
        $obj->execute(array($ma_can_bo, $ten_can_bo, $gioi_tinh, $ngay_sinh, $email, $so_dien_thoai_1, $so_dien_thoai_2, $dia_chi_lien_lac, $dia_chi_thuong_tru, $id_trinh_do, $id_don_vi));
        return $obj->rowCount();
    }

    public function canbo__Update($id_can_bo, $ma_can_bo, $ten_can_bo, $gioi_tinh, $ngay_sinh, $email, $so_dien_thoai_1, $so_dien_thoai_2, $dia_chi_lien_lac, $dia_chi_thuong_tru, $id_trinh_do, $id_don_vi) {
        $obj = $this->connect->prepare("UPDATE canbo SET ma_can_bo=?, ten_can_bo=?, gioi_tinh=?, ngay_sinh=?, email=?, so_dien_thoai_1=?, so_dien_thoai_2=?, dia_chi_lien_lac=?, dia_chi_thuong_tru=?, id_trinh_do=?, id_don_vi=? WHERE id_can_bo=?");
        $obj->execute(array($ma_can_bo, $ten_can_bo, $gioi_tinh, $ngay_sinh, $email, $so_dien_thoai_1, $so_dien_thoai_2, $dia_chi_lien_lac, $dia_chi_thuong_tru, $id_trinh_do, $id_don_vi, $id_can_bo));
        return $obj->rowCount();
    }
    

    public function canbo__Delete($id_can_bo) {
        $obj = $this->connect->prepare("DELETE FROM canbo WHERE id_can_bo = ?");
        $obj->execute(array($id_can_bo));
        return $obj->rowCount();
    }

  
    public function canbo__Get_By_Id($id_can_bo) {
        $obj = $this->connect->prepare("SELECT * FROM canbo WHERE id_can_bo = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_can_bo));
        return $obj->fetch();
    }

    public function canbo__Get_By_Id_Trinh_Do($id_trinh_do) {
        $obj = $this->connect->prepare("SELECT * FROM canbo WHERE id_trinh_do = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_trinh_do));
        return $obj->fetchAll();
    }

    public function canbo__Get_By_Id_Don_Vi($id_don_vi) {
        $obj = $this->connect->prepare("SELECT * FROM canbo WHERE id_don_vi = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_don_vi));
        return $obj->fetchAll();
    }
}
?>