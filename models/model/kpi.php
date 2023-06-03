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

class kpi extends Database {

    public function kpi__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM kpi");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }
    
    public function kpi__Add($id_nhom_kpi, $ten_kpi, $don_vi_cb, $he_so_tc, $ghi_chu_kpi) {
        $obj = $this->connect->prepare("INSERT INTO kpi(id_nhom_kpi, ten_kpi, don_vi_cb, he_so_tc, ghi_chu_kpi) VALUES(?,?,?,?,?)");
        $obj->execute(array($id_nhom_kpi, $ten_kpi, $don_vi_cb, $he_so_tc, $ghi_chu_kpi));
        return $obj->rowCount();
         
    }

    public function kpi__Update($id_kpi, $id_nhom_kpi, $ten_kpi, $don_vi_cb, $he_so_tc, $ghi_chu_kpi) {
        $obj = $this->connect->prepare("UPDATE kpi SET id_nhom_kpi=?, ten_kpi=?, don_vi_cb=?, he_so_tc=?, ghi_chu_kpi=? WHERE id_kpi=?");
        $obj->execute(array($id_nhom_kpi, $ten_kpi, $don_vi_cb, $he_so_tc, $ghi_chu_kpi, $id_kpi));
        return $obj->rowCount();
         
    }

    public function kpi__Get_By_Id($id_kpi) {
        $obj = $this->connect->prepare("SELECT * FROM kpi WHERE id_kpi=?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_kpi));
        return $obj->fetch();
    }

    public function kpi__Get_By_Id_Nhom_Kpi($id_nhom_kpi) {
        $obj = $this->connect->prepare("SELECT * FROM kpi WHERE id_nhom_kpi=?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_nhom_kpi));
        return $obj->fetchAll();
    }
    public function kpi__Delete($id_kpi) {
        $obj = $this->connect->prepare("DELETE FROM kpi WHERE id_kpi=?");
        $obj->execute(array($id_kpi));
        return $obj->rowCount();
    }

    ///////////////////////////////

    public function nhomkpi__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM nhomkpi");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }
    
    public function nhomkpi__Add($ten_nhom_kpi, $ghi_chu) {
        $obj = $this->connect->prepare("INSERT INTO nhomkpi(ten_nhom_kpi, ghi_chu) VALUES(?,?)");
        $obj->execute(array($ten_nhom_kpi, $ghi_chu));
        return $obj->rowCount();
         
    }
    
    public function nhomkpi__Update($id_nhom_kpi, $ten_nhom_kpi, $ghi_chu) {
        $obj = $this->connect->prepare("UPDATE nhomkpi SET ten_nhom_kpi=?, ghi_chu=? WHERE id_nhom_kpi=?");
        $obj->execute(array($ten_nhom_kpi, $ghi_chu, $id_nhom_kpi));
        return $obj->rowCount();
         
    }
    
    public function nhomkpi__Get_By_Id($id_nhom_kpi) {
        $obj = $this->connect->prepare("SELECT * FROM nhomkpi WHERE id_nhom_kpi=?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_nhom_kpi));
        return $obj->fetch();
    }

    public function nhomkpi__Delete($id_nhom_kpi) {
        $obj = $this->connect->prepare("DELETE FROM nhomkpi WHERE id_nhom_kpi=?");
        $obj->execute(array($id_nhom_kpi));
        return $obj->rowCount();
    }

    public function luong__Get_All() {
        $obj = $this->connect->prepare("SELECT * FROM  luong");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }
    
    
    public function luong__Add($id_index, $id_can_bo, $ten_can_bo, $gioi_tinh, $ngay_sinh, $dia_chi, $so_dien_thoai, $ngay_vao_lam, $phan_loai, $trinh_do, $id_kpi, $ten_kpi, $don_vi_cb, $he_so_thuc, $thanh_tien, $ghi_chu_luong, $so_ngay_vang) {
        $res = 0;

        $obj_3 = $this->connect->prepare("INSERT INTO luong(id_index, id_can_bo, ten_can_bo, gioi_tinh, ngay_sinh, dia_chi, so_dien_thoai, ngay_vao_lam, phan_loai, trinh_do, id_kpi, ten_kpi, don_vi_cb, he_so_thuc, thanh_tien, ghi_chu_luong, so_ngay_vang) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $obj_3->execute(array($id_index, $id_can_bo, $ten_can_bo, $gioi_tinh, $ngay_sinh, $dia_chi, $so_dien_thoai, $ngay_vao_lam, $phan_loai, $trinh_do, $id_kpi, $ten_kpi, $don_vi_cb, $he_so_thuc, $thanh_tien, $ghi_chu_luong, $so_ngay_vang));
        $res += $obj_3->rowCount();
         return $res;
    }


    public function luong__Update($id_luong, $don_vi_cb, $he_so_thuc, $thanh_tien, $so_ngay_vang) {
        $res = 0;
        $obj_3 = $this->connect->prepare("UPDATE luong SET don_vi_cb=?, he_so_thuc=?, thanh_tien=?, so_ngay_vang=? WHERE id_luong = ?");
        $obj_3->execute(array($don_vi_cb, $he_so_thuc, $thanh_tien, $so_ngay_vang, $id_luong));
        $res += $obj_3->rowCount();
        return $res;
    }

    
    public function luong__Get_By_Id($id_luong) {
        $obj = $this->connect->prepare("SELECT * FROM luong WHERE id_luong=?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_luong));
        return $obj->fetch();
    }

    public function luong__Delete($id_luong) {
        $obj = $this->connect->prepare("DELETE FROM luong WHERE id_luong=?");
        $obj->execute(array($id_luong));
        return $obj->rowCount();
    }

    public function luong__Delete_By_Index_And_Nhan_Vien($id_index, $id_can_bo) {
        $obj = $this->connect->prepare("DELETE FROM luong WHERE id_index=? AND id_can_bo=?");
        $obj->execute(array($id_index, $id_can_bo));
        return $obj->rowCount();
    }
    

    public function luong__Delete_By_Index($id_index) {
        $obj = $this->connect->prepare("DELETE  FROM luong WHERE id_index=?");
        $obj->execute(array($id_index));
        return $obj->rowCount();
    }

    public function luong__Get_By_Index_Group_By_Nhan_Vien($id_index) {
        $obj = $this->connect->prepare("SELECT * FROM luong WHERE id_index=? GROUP BY id_can_bo");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_index));
        return $obj->fetchAll();
    }

    public function luong__Get_By_Id_Nhan_Vien_And_Id_Index($id_can_bo, $id_index) {
        $obj = $this->connect->prepare("SELECT * FROM luong WHERE id_can_bo=? AND id_index=?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_can_bo, $id_index));
        return $obj->fetchAll();
    }

    public function kpi__Get_All_Not_Exist_By_Nhan_Vien_And_Index($id_can_bo, $id_index) {
        $obj = $this->connect->prepare("SELECT * FROM kpi WHERE id_kpi NOT IN (SELECT id_kpi FROM luong WHERE id_can_bo=? AND id_index=?)");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_can_bo, $id_index));
        return $obj->fetchAll();
    }

    public function luong__Get_By_Id_Index_Not_In($id_index) {
        $obj = $this->connect->prepare("SELECT * FROM kpi WHERE id_kpi NOT IN (SELECT id_kpi FROM luong WHERE id_index=?)");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_index));
        return $obj->fetchAll();
    }

    public function luong__Get_Nhan_Vien_By_Id_Index_Not_In($id_index) {
        $obj = $this->connect->prepare("SELECT * FROM nhanvien WHERE trang_thai =1 AND id_can_bo NOT IN (SELECT id_can_bo FROM luong WHERE id_index=?)");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_index));
        return $obj->fetchAll();
    }

    public function luong__Get_By_Index($id_index) {
        $obj = $this->connect->prepare("SELECT * FROM luong WHERE id_index =?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_index));
        return $obj->fetchAll();
    }



    public function luong__Get_Type($id_index, $id_can_bo, $id_nhom_kpi) {
        $obj = $this->connect->prepare("
        SELECT luong.*, 
        ((luong.don_vi_cb * luong.he_so_thuc) / 26) AS luong_ngay, 
        (((luong.don_vi_cb * luong.he_so_thuc) / 26) * luong.so_ngay_vang) AS luong_tru,
        (luong.don_vi_cb * luong.he_so_thuc) AS luong_thang,
        SUM(luong.he_so_thuc * luong.don_vi_cb) AS sum_luong 
        FROM luong, nhomkpi, kpi  
        WHERE kpi.id_nhom_kpi = nhomkpi.id_nhom_kpi and kpi.id_kpi = luong.id_kpi
        and id_index =? and id_can_bo=? and nhomkpi.id_nhom_kpi=?
        ");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_index, $id_can_bo,  $id_nhom_kpi));
        
        return $obj->fetch();
    }

    public function luong__Get_By_Index_Nhan_Vien_Nhom_KPI($id_index, $id_can_bo, $id_nhom_kpi) {
        $obj = $this->connect->prepare("SELECT luong.* FROM luong, nhomkpi, kpi 
        WHERE luong.id_index=? and luong.id_can_bo=? and nhomkpi.id_nhom_kpi=? and
        kpi.id_nhom_kpi = nhomkpi.id_nhom_kpi and kpi.id_kpi = luong.id_kpi");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_index, $id_can_bo, $id_nhom_kpi));
        
        return $obj->fetchAll();
    }

    public function luong__Get_Kpi_Not_In_Kpi($id_can_bo,$id_index) {
        $obj = $this->connect->prepare("SELECT * FROM luong WHERE id_can_bo=? AND id_index=? and id_kpi not in (SELECT id_kpi FROM kpi)");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_can_bo,$id_index));
        
        return $obj->fetchAll();
    }

    public function luong__Get_Type_Basic($id_index, $id_can_bo) {
        $obj = $this->connect->prepare("SELECT SUM(he_so_thuc * don_vi_cb) AS sum_luong FROM luong WHERE id_index =? and id_can_bo=? and id_kpi != 0");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_index, $id_can_bo));
        
        return $obj->fetch();
    }
}
?>