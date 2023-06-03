<?php

require "../../models/getModel.php";
require("../../assets/vendor/tfpdf/tfpdf.php");

if(isset($_GET["page"])){
    $page = $_GET["page"];

    if($page == "kpi"){
        if (isset($_GET["req"])) {
            $req = $_GET["req"];
                switch ($req) {
                    case "add":
                        $id_nhom_kpi = $_POST['id_nhom_kpi'];
                        $ten_kpi = $_POST['ten_kpi'];
                        $don_vi_cb = $fm->decode_money($_POST['don_vi_cb']);
                        $he_so_tc = $fm->decode_money($_POST['he_so_tc']);
                        $ghi_chu_kpi = $_POST['ghi_chu_kpi'];
        
                        $status = $kpi->kpi__Add($id_nhom_kpi,$ten_kpi,$don_vi_cb,$he_so_tc,$ghi_chu_kpi);
                        if($status == 0){
                            header("location:../index.php?page=quan-ly-kpi&req=kpi&status=fail");
                        }else{
                            header("location:../index.php?page=quan-ly-kpi&req=kpi&status=success");
                        }
        
                        break;
                        
                    case "update":
                        $id_kpi = $_POST['id_kpi'];
                        $id_nhom_kpi = $_POST['id_nhom_kpi'];
                        $ten_kpi = $_POST['ten_kpi'];
                        $don_vi_cb = $fm->decode_money($_POST['don_vi_cb']);
                        $he_so_tc = $fm->decode_money($_POST['he_so_tc']);
                        $ghi_chu_kpi = $_POST['ghi_chu_kpi'];
        
                        $status = $kpi->kpi__Update($id_kpi, $id_nhom_kpi,$ten_kpi,$don_vi_cb,$he_so_tc,$ghi_chu_kpi);
                        if($status == 0){
                            header("location:../index.php?page=quan-ly-kpi&req=kpi&status=fail");
                        }else{
                            header("location:../index.php?page=quan-ly-kpi&req=kpi&status=success");
                        }
        
                        break;
                        
                    
                    case "delete":
                        $id_kpi = $_GET['id_kpi'];
        
                        $status = $kpi->kpi__Delete($id_kpi);
                        if($status == 0){
                            header("location:../index.php?page=quan-ly-kpi&req=kpi&group=1&status=fail");
                        }else{
                             header("location:../index.php?page=quan-ly-kpi&req=kpi&group=1&status=success");
                        }
                        break;
            }
        }
    }
    }

    ///////////////////////////

    if($page == "nhom-kpi"){
        if (isset($_GET["req"])) {
            $req = $_GET["req"];
                switch ($req) {
                    case "add":
                        $ten_nhom_kpi = $_POST['ten_nhom_kpi'];
                        $ghi_chu = $_POST['ghi_chu'];
        
                        $status = $kpi->nhomkpi__Add($ten_nhom_kpi,$ghi_chu);
                        if($status == 0){
                            header("location:../index.php?page=quan-ly-kpi&req=nhom-kpi&status=fail");
                        }else{
                            header("location:../index.php?page=quan-ly-kpi&req=nhom-kpi&status=success");
                        }
        
                        break;
                        
                    case "update":
                        $id_nhom_kpi = $_POST['id_nhom_kpi'];
                        $ten_nhom_kpi = $_POST['ten_nhom_kpi'];
                        $ghi_chu = $_POST['ghi_chu'];
        
                        $status = $kpi->nhomkpi__Update($id_nhom_kpi, $ten_nhom_kpi,$ghi_chu);
                        if($status == 0){
                            header("location:../index.php?page=quan-ly-kpi&req=nhom-kpi&status=fail");
                        }else{
                            header("location:../index.php?page=quan-ly-kpi&req=nhom-kpi&status=success");
                        }
                        break;
                    
                    case "delete":
                        $id_nhom_kpi = $_GET['id_nhom_kpi'];
        
                        $status = $kpi->nhomkpi__Delete($id_nhom_kpi);
                        if($status == 0){
                            header("location:../index.php?page=quan-ly-kpi&req=nhom-kpi&group=1&status=fail");
                        }else{
                             header("location:../index.php?page=quan-ly-kpi&req=nhom-kpi&group=1&status=success");
                        }
                        break;
            }
        }
    }

   
        ///////////////////////////

        if($page == "luong"){
            if (isset($_GET["req"])) {
                $req = $_GET["req"];
                    switch ($req) {
                        case "copy_luong":
                            $status = 0;
                            $id_index = $_POST['id_index'];
                            $id_index_copy = $_POST['id_index_copy'];
                            $luong__Get_By_Index = $kpi->luong__Get_By_Index($id_index_copy);

                            foreach($luong__Get_By_Index as $item_1){

                                    $status += $kpi->luong__Add($id_index, $item_1->id_nv, $item_1->ten_nv, $item_1->gioi_tinh, $item_1->ngay_sinh, $item_1->dia_chi, $item_1->so_dien_thoai, $item_1->ngay_vao_lam, $item_1->phan_loai, $item_1->trinh_do, $item_1->id_kpi, $item_1->ten_kpi, 
                                    $item_1->don_vi_cb, $item_1->he_so_thuc, $item_1->thanh_tien, $item_1->ghi_chu_luong, $item_1->so_ngay_vang);
                            }
                                 
                            if($status == 0){
                                header("location:../index.php?page=quan-ly-kpi&req=luong&id_index=$id_index&status=fail");
                            }else{
                                header("location:../index.php?page=quan-ly-kpi&req=luong&id_index=$id_index&status=success");
                            }
            
                            break;


                        case "add_by_nv":
                            $status = 0;
                            $id_index = $_POST['id_index'];
                            $id_nv = $_POST['id_nv'];
                            $item_1 = $nhanvien->nhanvien__Get_By_Id($id_nv);
                            $list_kpi = $kpi->kpi__Get_All();

                            foreach($list_kpi as $item_2){
                                $status += $kpi->luong__Add($id_index, $item_1->id_nv, $item_1->ho_ten, $item_1->gioi_tinh, $item_1->ngay_sinh, $item_1->dia_chi, $item_1->so_dien_thoai, $item_1->ngay_vao_lam, $phanloai->phanloai__Get_By_Id($item_1->id_phan_loai)->ten_phan_loai, $trinhdo->trinhdo__Get_By_Id($item_1->id_trinh_do)->ten_trinh_do, $item_2->id_kpi, $item_2->ten_kpi, $item_2->don_vi_cb, $item_2->he_so_tc, 0, "", -1);
                            }
                                 
                            if($status == 0){
                                header("location:../index.php?page=quan-ly-kpi&req=luong&id_index=$id_index&status=fail");
                            }else{
                                header("location:../index.php?page=quan-ly-kpi&req=luong&id_index=$id_index&status=success");
                            }
            
                            break;

                        case "add":
                            $status = 0;
                            $id_index = $_POST['id_index'];
                            $list_nv = $nhanvien->nhanvien__Get_All_Active();
                            $list_kpi = $kpi->kpi__Get_All();

                            foreach($list_nv as $item_1){
                                foreach($list_kpi as $item_2){
                                    $status += $kpi->luong__Add($id_index, $item_1->id_nv, $item_1->ho_ten, $item_1->gioi_tinh, $item_1->ngay_sinh, $item_1->dia_chi, $item_1->so_dien_thoai, $item_1->ngay_vao_lam, $phanloai->phanloai__Get_By_Id($item_1->id_phan_loai)->ten_phan_loai, $trinhdo->trinhdo__Get_By_Id($item_1->id_trinh_do)->ten_trinh_do, $item_2->id_kpi, $item_2->ten_kpi, $item_2->don_vi_cb, $item_2->he_so_tc, 0, "", -1);
                                }
                            }       
                                 
                            if($status == 0){
                                header("location:../index.php?page=quan-ly-kpi&req=luong&id_index=$id_index&status=fail");
                            }else{
                                header("location:../index.php?page=quan-ly-kpi&req=luong&id_index=$id_index&status=success");
                            }
            
                            break;

                        case "delete":
                            $id_index = $_GET['id_index'];
                            $status = $kpi->luong__Delete_By_Index($id_index);
                              
                            if($status == 0){
                                header("location:../index.php?page=quan-ly-kpi&req=luong&id_index=$id_index&status=fail");
                            }else{
                                header("location:../index.php?page=quan-ly-kpi&req=luong&id_index=$id_index&status=success");
                            }
            
                            break;
                        case "delete_by_nv":
                            $id_index = $_GET['id_index'];
                            $id_nv = $_GET['id_nv'];
                            $status = $kpi->luong__Delete_By_Index_And_Nhan_Vien($id_index, $id_nv);
                              
                            if($status == 0){
                                header("location:../index.php?page=quan-ly-kpi&req=luong&id_index=$id_index&status=fail");
                            }else{
                                header("location:../index.php?page=quan-ly-kpi&req=luong&id_index=$id_index&status=success");
                            }
                
                            break;
                        case "update":
                            $status = 0;
                            $id_index = $_POST['id_index'];
                            $id_nv = $_POST['id_nv'];

                            $id_luong = $_POST['id_luong'];
                            $id_kpi = $_POST['id_kpi'];
                            $ten_kpi = $_POST['ten_kpi'];
                            $don_vi_cb = $_POST['don_vi_cb'];
                            $he_so_thuc = $_POST['he_so_thuc'];
                            $thanh_tien = $_POST['thanh_tien'];
                            $so_ngay_vang = $_POST['so_ngay_vang'];

                            $item_1 = $nhanvien->nhanvien__Get_By_Id($id_nv);

                            for($j = 0; $j< count($id_luong); $j++){

                                $status += $kpi->luong__Update($id_luong[$j], $don_vi_cb[$j], $he_so_thuc[$j], $thanh_tien[$j],$so_ngay_vang);
                            }
                            if(isset($_POST['id_del'])){

                                $id_del = $_POST['id_del'];
                                for($d = 0; $d< count($id_del); $d++){
                                    $status += $kpi->luong__Delete($id_del[$d]);

                                }

                            }
                           
                            if(isset($_POST['ten_kpi_add'])){
                                $ten_kpi_add = $_POST['ten_kpi_add'];
                                $don_vi_cb_add = $_POST['don_vi_cb_add'];
                                $he_so_thuc_add = $_POST['he_so_thuc_add'];
                                $thanh_tien_add = $_POST['thanh_tien_add'];

                                for($i = 0; $i< count($ten_kpi_add); $i++){

                                    $status += $kpi->luong__Add($id_index, 
                                    $item_1->id_nv, 
                                    $item_1->ho_ten, 
                                    $item_1->gioi_tinh, 
                                    $item_1->ngay_sinh, 
                                    $item_1->dia_chi, 
                                    $item_1->so_dien_thoai, 
                                    $item_1->ngay_vao_lam, 
                                    $phanloai->phanloai__Get_By_Id($item_1->id_phan_loai)->ten_phan_loai, 
                                    $trinhdo->trinhdo__Get_By_Id($item_1->id_trinh_do)->ten_trinh_do, 
                                    -(date('s').$item_1->id_nv), 
                                    $ten_kpi_add[$i], 
                                    $don_vi_cb_add[$i], 
                                    $he_so_thuc_add[$i], 
                                    $thanh_tien_add[$i],
                                    "", 
                                    $so_ngay_vang);
                                }
                            }

                            if(isset($_POST['id_kpi_add'])){
                                $id_kpi_add = $_POST['id_kpi_add'];
                                $don_vi_cb_add = $_POST['don_vi_cb_add'];
                                $he_so_thuc_add = $_POST['he_so_thuc_add'];
                                $thanh_tien_add = $_POST['thanh_tien_add'];

                                for($k = 0; $k< count($id_kpi_add); $k++){

                                    $status += $kpi->luong__Add($id_index, 
                                    $item_1->id_nv, 
                                    $item_1->ho_ten, 
                                    $item_1->gioi_tinh, 
                                    $item_1->ngay_sinh, 
                                    $item_1->dia_chi, 
                                    $item_1->so_dien_thoai, 
                                    $item_1->ngay_vao_lam, 
                                    $phanloai->phanloai__Get_By_Id($item_1->id_phan_loai)->ten_phan_loai, 
                                    $trinhdo->trinhdo__Get_By_Id($item_1->id_trinh_do)->ten_trinh_do, 
                                    $id_kpi_add[$k], 
                                    $kpi->kpi__Get_By_Id($id_kpi_add[$k])->ten_kpi, 
                                    $don_vi_cb_add[$k], 
                                    $he_so_thuc_add[$k], 
                                    $thanh_tien_add[$k],
                                    "", 
                                    $so_ngay_vang);
                                }
                            }


                            // In phiếu    
                            
                            $nhomkpi__Get_All = $kpi->nhomkpi__Get_All();
                            $luong__Get_Type = $kpi->luong__Get_Type($id_index, $id_nv, 1);

                            
                            ob_start();
                            $pdf =  new tFPDF('P','mm',array(67,300));
                            $pdf->AddPage();
                            $pdf->SetMargins(0.2, 0.2, 0.2);
                            $pdf->SetXY(2,2);
                            
                            $pdf->AddFont('Roboto-Bold', '', 'Roboto-Bold.ttf', true);
                            $pdf->SetFont('Roboto-Bold', '', 11);
                            $pdf->Cell(55,6, "PHIẾU LƯƠNG", 0,2,"C");
            
                            $pdf->AddFont('Roboto-Italic', '', 'Roboto-Italic.ttf', true);
                            $pdf->SetFont('Roboto-Italic', '', 9);
                            $pdf->Cell(55,6,date("d-m-Y"),0,2,"C");
            
                            $pdf->AddFont('Roboto-Bold', '', 'Roboto-Bold.ttf', true);
                            $pdf->SetFont('Roboto-Bold', '', 9);
                            $pdf->Cell(50,6, $nhanvien->nhanvien__Get_By_Id($id_nv)->ho_ten, 0,2,"L");
            
                            
                            foreach($nhomkpi__Get_All as $item_1){
            
                                // KPI khác lương cơ bản
                                if($item_1->id_nhom_kpi != 1){
                                        $num = 0;
                                        $pdf->AddFont('Roboto-Bold', '', 'Roboto-Bold.ttf', true);
                                        $pdf->SetFont('Roboto-Bold', '', 8);
                                        $sum = round($kpi->luong__Get_Type($id_index, $id_nv, $item_1->id_nhom_kpi)->sum_luong,2);
                                        $pdf->Cell(20,5,"#".$item_1->ten_nhom_kpi. " (". $fm->format_money($sum).")", 0,2,"L");
                                        
                                        $luong__Get_By_Index_Nhan_Vien_Nhom_KPI = $kpi->luong__Get_By_Index_Nhan_Vien_Nhom_KPI($id_index, $id_nv, $item_1->id_nhom_kpi);
                                        foreach($luong__Get_By_Index_Nhan_Vien_Nhom_KPI as $item_2){
                                            if($item_2->thanh_tien > 0){
            
                                            if(count($luong__Get_By_Index_Nhan_Vien_Nhom_KPI) >1){
                                            if($item_2->thanh_tien != 0){
                                             
                                            }
                                            $pdf->AddFont('Roboto-Regular', '', 'Roboto-Regular.ttf', true);
                                            $pdf->SetFont('Roboto-Regular', '', 8);
                                            $pdf->Cell(20,5,++$num.". ".$item_2->ten_kpi.": ".$fm->format_money($item_2->thanh_tien), 0,2,"L");
                                         }
                                    }
                                }
                                }else{
                                                            
                                    $pdf->AddFont('Roboto-Bold', '', 'Roboto-Bold.ttf', true);
                                    $pdf->SetFont('Roboto-Bold', '', 8);
                                    $pdf->Cell(20,5,"# ".$item_1->ten_nhom_kpi. " (". $fm->format_money(round(($luong__Get_Type->luong_ngay * 26) -  ($luong__Get_Type->luong_ngay) * ($luong__Get_Type->so_ngay_vang))).")", 0,2,"L");
                         
                                    if($luong__Get_Type->so_ngay_vang > 0){
                                            
                                        $pdf->AddFont('Roboto-Regular', '', 'Roboto-Regular.ttf', true);
                                        $pdf->SetFont('Roboto-Regular', '', 8);

                                        $pdf->Cell(20,5,"(1) Lương cơ bản: 26 x " 
                                        .$fm->format_money(round($luong__Get_Type->luong_ngay)) 
                                        ." = " .$fm->format_money(round($luong__Get_Type->luong_ngay) * 26), 0,2,"L");                                    
                                        
                                        $pdf->Cell(20,5,"(2) Giảm trừ vắng: " 
                                        .$luong__Get_Type->so_ngay_vang ." x " .$fm->format_money(round($luong__Get_Type->luong_ngay)) ." = -" 
                                        .$fm->format_money(round(($luong__Get_Type->luong_ngay) * ($luong__Get_Type->so_ngay_vang))), 0,2,"L");
                
                                        $pdf->AddFont('Roboto-Italic', '', 'Roboto-Italic.ttf', true);
                                        $pdf->SetFont('Roboto-Italic', '', 8);
                    
                                        $pdf->Cell(20,5,"=> Lương thực nhận: (1) - (2) = "
                                        .$fm->format_money(round(($luong__Get_Type->luong_ngay * 26) - ($luong__Get_Type->luong_ngay) * ($luong__Get_Type->so_ngay_vang))), 0,2,"L");
            
                                    }else{
                                        if($item_1->id_nhom_kpi != 1){
            
                                        $pdf->AddFont('Roboto-Bold', '', 'Roboto-Bold.ttf', true);
                                        $pdf->SetFont('Roboto-Bold', '', 9);
                                        $sum = $fm->format_money(round($kpi->luong__Get_Type_Basic($id_index, $id_nv)->sum_luong) + ($luong__Get_Type->luong_ngay * 26) - ($luong__Get_Type->luong_ngay) * ($luong__Get_Type->so_ngay_vang));
                                        $pdf->Cell(20,5,"#".$item_1->ten_nhom_kpi. " (". $fm->format_money(round($sum)), 0,2,"L");
                                    }
                                }
                                }
                            }
            
                            $luong__Get_Kpi_Not_In_Kpi = $kpi->luong__Get_Kpi_Not_In_Kpi($id_nv,$id_index);
                            if(count($luong__Get_Kpi_Not_In_Kpi)>0){
                                $pdf->AddFont('Roboto-Bold', '', 'Roboto-Bold.ttf', true);
                                $pdf->SetFont('Roboto-Bold', '', 8);
                                $pdf->Cell(20,5,"# Các khoản khác: ", 0,2,"L");
                                $num = 0;
                     
                                foreach($luong__Get_Kpi_Not_In_Kpi as $item_3){
                                        $pdf->AddFont('Roboto-Regular', '', 'Roboto-Regular.ttf', true);
                                        $pdf->SetFont('Roboto-Regular', '', 8);
                                        $pdf->Cell(20,5,++$num.". ".$item_3->ten_kpi.": ".$fm->format_money(round($item_3->thanh_tien)), 0,2,"L");
                                    }
                            }
                            
            
                            $pdf->Cell(50,6, "", 0,2,"L");
            
                            $pdf->AddFont('Roboto-Bold', '', 'Roboto-Bold.ttf', true);
                            $pdf->SetFont('Roboto-Bold', '', 9);
                            $pdf->Cell(55,6,"=> TỔNG NHẬN: ".$fm->format_money(round(($kpi->luong__Get_Type_Basic($id_index, $id_nv)->sum_luong) + ($luong__Get_Type->luong_ngay * 26) - ($luong__Get_Type->luong_ngay) * ($luong__Get_Type->so_ngay_vang))), 0,2,"L");
            
                            $pdf->AddFont('Roboto-Italic', '', 'Roboto-Italic.ttf', true);
                            $pdf->SetFont('Roboto-Italic', '', 8);
                            $pdf->Cell(50,6, "-------------------------------------------------------------------------------", 0,2,"L");
            
                            $pdf->Output();
                            ob_end_flush(); 


                            if($status == 0){
                                header("location:../index.php?page=quan-ly-kpi&req=luong&id_index=$id_index&status=fail");
                            }else{
                                header("location:../index.php?page=quan-ly-kpi&req=luong&id_index=$id_index&status=success");
                            }

            
                            break;

                        }
        }
    }