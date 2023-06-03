<?php
    require "../models/getModel.php";
    $id_index = $indexcount__Get_By_Date->id_index;
?>

<!-- nav-menu -->
<?php if($SS_LEVEL == 0):?>
<div class="nav-menu">
    <ul class="nav-menu__container">
        <?php if(isset($_GET['req'])):?>
        <?php if($_GET['req'] == 'luong'):?>
        <a href="index.php?page=quan-ly-kpi&req=luong&id_index=<?=$id_index?>">
            <li class="nav-menu__item active">
                <i class='bx bx-line-chart'></i>
                <span class="nav-menu__item-text">Lương</span>
            </li>
        </a>
        <?php else:?>
        <a href="index.php?page=quan-ly-kpi&req=luong&id_index=<?=$id_index?>">
            <li class="nav-menu__item">
                <i class='bx bx-line-chart'></i>
                <span class="nav-menu__item-text">Lương</span>
            </li>
        </a>
        <?php endif?>

        <?php if($_GET['req'] == 'kpi'):?>
        <a href="index.php?page=quan-ly-kpi&req=kpi">
            <li class="nav-menu__item active">
                <i class='bx bx-calendar-check'></i>
                <span class="nav-menu__item-text">KPI</span>
            </li>
        </a>
        <?php else:?>
        <a href="index.php?page=quan-ly-kpi&req=kpi">
            <li class="nav-menu__item">
                <i class='bx bx-calendar-check'></i>
                <span class="nav-menu__item-text">KPI</span>
            </li>
        </a>
        <?php endif?>

        <?php if($_GET['req'] == 'nhom-kpi'):?>
        <a href="index.php?page=quan-ly-kpi&req=nhom-kpi">
            <li class="nav-menu__item active">
                <i class='bx bxs-briefcase-alt-2'></i>
                <span class="nav-menu__item-text">Nhóm KPI</span>
            </li>
        </a>
        <?php else:?>
        <a href="index.php?page=quan-ly-kpi&req=nhom-kpi">
            <li class="nav-menu__item">
                <i class='bx bxs-briefcase-alt-2'></i>
                <span class="nav-menu__item-text">Nhóm KPI</span>
            </li>
        </a>
        <?php endif?>

        <?php else:?>
        <script>
        location.href = 'index.php?page=dashboard'
        </script>
        <?php endif?>
    </ul>
</div>
<?php else:?>

<div class="nav-menu">
    <ul class="nav-menu__container">
        <?php if(isset($_GET['req'])):?>


        <?php if($menu__luong):?>
        <?php if($_GET['req'] == 'luong'):?>
        <a href="index.php?page=quan-ly-kpi&req=luong&id_index=<?=$id_index?>">
            <li class="nav-menu__item active">
                <i class='bx bx-line-chart'></i>
                <span class="nav-menu__item-text">Lương</span>
            </li>
        </a>
        <?php else:?>
        <a href="index.php?page=quan-ly-kpi&req=luong&id_index=<?=$id_index?>">
            <li class="nav-menu__item">
                <i class='bx bx-line-chart'></i>
                <span class="nav-menu__item-text">Lương</span>
            </li>
        </a>
        <?php endif?>
        <?php endif?>

        <?php if($menu__kpi):?>
        <?php if($_GET['req'] == 'kpi'):?>
        <a href="index.php?page=quan-ly-kpi&req=kpi">
            <li class="nav-menu__item active">
                <i class='bx bx-calendar-check'></i>
                <span class="nav-menu__item-text">KPI</span>
            </li>
        </a>
        <?php else:?>
        <a href="index.php?page=quan-ly-kpi&req=kpi">
            <li class="nav-menu__item">
                <i class='bx bx-calendar-check'></i>
                <span class="nav-menu__item-text">KPI</span>
            </li>
        </a>
        <?php endif?>
        <?php endif?>

        <?php if($menu__nhom_kpi):?>
        <?php if($_GET['req'] == 'nhom-kpi'):?>
        <a href="index.php?page=quan-ly-kpi&req=nhom-kpi">
            <li class="nav-menu__item active">
                <i class='bx bxs-briefcase-alt-2'></i>
                <span class="nav-menu__item-text">Nhóm KPI</span>
            </li>
        </a>
        <?php else:?>
        <a href="index.php?page=quan-ly-kpi&req=nhom-kpi">
            <li class="nav-menu__item">
                <i class='bx bxs-briefcase-alt-2'></i>
                <span class="nav-menu__item-text">Nhóm KPI</span>
            </li>
        </a>
        <?php endif?>
        <?php endif?>
        <?php else:?>
        <script>
        location.href = 'index.php?page=dashboard'
        </script>
        <?php endif?>
    </ul>
</div>
<?php endif?>
<!-- end nav-menu -->

<!-- nhom-kpi-->
<?php if(isset($_GET['req']) && $_GET['req'] == 'nhom-kpi'):?>

<?php

     $nhomkpi__Get_All = $kpi->nhomkpi__Get_All();
?>

<!-- main-container -->

<div class="main-container">
    <div class="main-container__add w-300px">
        <div class="main-container__add-form">
            <div class="text-title">
                Thêm nhóm KPI
                <div class="text-muted">
                    Vui lòng điền thông tin
                </div>
            </div>
            <form action="quan-ly-kpi/action.php?page=nhom-kpi&req=add" method="post" enctype="multipart/form-data">
                <div class="form-group mt-1">
                    <label for="">Tên nhóm KPI</label>
                    <input type="text" class="form-control" required name="ten_nhom_kpi" id="ten_nhom_kpi">
                </div>
                <div class="form-group mt-1">
                    <label for="">Ghi chú</label>
                    <textarea class="form-control" required name="ghi_chu" id="ghi_chu"></textarea>
                </div>
                <div class="form-group mt-5 t-center">
                    <button type="submit" class="btn btn-success">Thêm</button>
                </div>
            </form>
        </div>
    </div>
    <div class="main-container__update w-0"></div>
    <div class="main-container__view w-100-300px">
        <div class="text-title">
            Khu vực hiển thị
            <div class="text-muted">
                <b>Nhóm KPI: <?=count($nhomkpi__Get_All)?> </b>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table" style="width:100%" id="table_quan_ly_kpi__nhom_kpi">
                <thead>
                    <tr class="title_table">
                        <td>#</td>
                        <td>Tên nhóm KPI</td>
                        <td>Ghi chú</td>
                        <?php if($SS_LEVEL == 0):?>
                        <td>Thao tác</td>
                        <?php endif?>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 0?>
                    <?php foreach($nhomkpi__Get_All as $item): ?>
                    <tr class="td_hover" onclick="update_obj(<?=$item->id_nhom_kpi?>)">
                        <td><?=++$count?></td>
                        <td><?=$item->ten_nhom_kpi?></td>
                        <td><?=$item->ghi_chu?></td>
                        <?php if($SS_LEVEL == 0):?>
                        <td
                            onclick="return confirm_sweet('quan-ly-kpi/action.php?page=nhom-kpi&req=delete&id_nhom_kpi=<?=$item->id_nhom_kpi?>')">
                            <i class="bx bxs-trash-alt"></i>
                        </td>
                        <?php endif?>
                    </tr>
                    <?php endforeach?>

                </tbody>
            </table>
        </div>
    </div>

    <script>
    window.addEventListener('load', function() {
        $('.main-container__update').hide();

        var btn_ttbs = document.querySelector(".btn_ttbs");

        $('#table_quan_ly_kpi__nhom_kpi').DataTable({
            fixedHeader: true,
            "lengthMenu": [
                [-1, 10, 25, 50],
                ["All", 10, 25, 50]
            ],
        });

    });

    function update_obj(id_nhom_kpi) {
        var update = document.querySelector(".main-container__update");
        var view = document.querySelector(".main-container__view");
        var add = document.querySelector(".main-container__add");

        view.classList.add("w-100-300px");
        update.classList.remove("w-0");
        update.classList.add("w-300px");
        add.classList.add("hide");

        $('.main-container__update').show();


        $.post("quan-ly-kpi/update.php", {
            page_update: "nhom-kpi",
            id_nhom_kpi: id_nhom_kpi,
        }, function(data, status) {
            $(".main-container__update").html(data);
        });
    };
    </script>
</div>

<?php endif?>
<!-- end nhom-kpi-->

<!-- ///////////////////////////////////// -->

<!-- nhom-kpi-->
<?php if(isset($_GET['req']) && $_GET['req'] == 'kpi'):?>

<?php

     $kpi__Get_All = $kpi->kpi__Get_All();
     $nhomkpi__Get_All = $kpi->nhomkpi__Get_All();
     
?>

<!-- main-container -->

<div class="main-container">
    <div class="main-container__add w-300px">
        <div class="main-container__add-form">
            <div class="text-title">
                Thêm KPI
                <div class="text-muted">
                    Vui lòng điền thông tin
                </div>
            </div>
            <form action="quan-ly-kpi/action.php?page=kpi&req=add" method="post" enctype="multipart/form-data">
                <div class="form-group m-1">
                    <label for="">Chọn nhóm kpi</label>
                    <div class="form-control d-flex-lg-wrap">
                        <?php foreach($nhomkpi__Get_All as $item):?>
                        <div class="w-47 m-1">
                            <input type="radio" class="btn-check" required name="id_nhom_kpi"
                                id="add_<?=$item->id_nhom_kpi?>" value="<?=$item->id_nhom_kpi?>" autocomplete="off">
                            <label class="btn btn-sm btn-outline-success check w-100"
                                for="add_<?=$item->id_nhom_kpi?>"><?=$item->ten_nhom_kpi?></label>
                        </div>
                        <?php endforeach?>
                    </div>
                </div>
                <div class="form-group mt-1">
                    <label for="">Tên KPI</label>
                    <input type="text" class="form-control" required name="ten_kpi" id="ten_kpi">
                </div>
                <div class="form-group mt-1">
                    <label for="">Đơn vị cơ bản</label>
                    <input type="currency" class="form-control w-100" required name="don_vi_cb" id="don_vi_cb">
                </div>
                <div class="form-group mt-1">
                    <label for="">Hệ số tham chiếu</label>
                    <input type="currency" class="form-control" required name="he_so_tc" id="he_so_tc">
                </div>
                <div class="form-group mt-1">
                    <label for="">Ghi chú</label>
                    <textarea class="form-control" name="ghi_chu_kpi" id="ghi_chu_kpi"></textarea>
                </div>
                <div class="form-group mt-5 t-center">
                    <button type="submit" class="btn btn-success">Thêm</button>
                </div>
            </form>
        </div>
    </div>
    <div class="main-container__update w-0"></div>
    <div class="main-container__view w-100-300px">
        <div class="text-title">
            Khu vực hiển thị
            <div class="text-muted">
                <b>Nhóm KPI: <?=count($kpi__Get_All)?> </b>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table" style="width:100%" id="table_quan_ly_kpi__kpi">
                <thead>
                    <tr class="title_table">
                        <td>#</td>
                        <td>Tên nhóm KPI</td>
                        <td>Tên KPI</td>
                        <td>Đơn vị cơ bản</td>
                        <td>Hệ số tham chiếu</td>
                        <td>Ghi chú</td>
                        <?php if($SS_LEVEL == 0):?>
                        <td>Thao tác</td>
                        <?php endif?>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 0?>
                    <?php foreach($kpi__Get_All as $item): ?>
                    <tr class="td_hover" onclick="update_obj(<?=$item->id_kpi?>)">
                        <td><?=++$count?></td>
                        <td><?=$kpi->nhomkpi__Get_By_Id($item->id_nhom_kpi)->ten_nhom_kpi?></td>
                        <td><?=$item->ten_kpi?></td>
                        <td><?=$fm->format_money($item->don_vi_cb)?></td>
                        <td><?=$item->he_so_tc?></td>
                        <td><?=$item->ghi_chu_kpi?></td>
                        <?php if($SS_LEVEL == 0):?>
                        <td
                            onclick="return confirm_sweet('quan-ly-kpi/action.php?page=kpi&req=delete&id_kpi=<?=$item->id_kpi?>')">
                            <i class="bx bxs-trash-alt"></i>
                        </td>
                        <?php endif?>
                    </tr>
                    <?php endforeach?>

                </tbody>
            </table>
        </div>
    </div>

    <script>
    window.addEventListener('load', function() {
        $('.main-container__update').hide();

        var btn_ttbs = document.querySelector(".btn_ttbs");

        $('#table_quan_ly_kpi__kpi').DataTable({
            fixedHeader: true,

            "lengthMenu": [
                [-1, 10, 25, 50],
                ["All", 10, 25, 50]
            ],
        });

    });

    function update_obj(id_kpi) {
        var update = document.querySelector(".main-container__update");
        var view = document.querySelector(".main-container__view");
        var add = document.querySelector(".main-container__add");

        view.classList.add("w-100-300px");
        update.classList.remove("w-0");
        update.classList.add("w-300px");
        add.classList.add("hide");

        $('.main-container__update').show();


        $.post("quan-ly-kpi/update.php", {
            page_update: "kpi",
            id_kpi: id_kpi,
        }, function(data, status) {
            $(".main-container__update").html(data);
        });
    };
    </script>
</div>

<?php endif?>
<!-- end kpi-->

<!-- ///////////////////////////////////// -->

<!-- luong-->
<?php if(isset($_GET['req']) && $_GET['req'] == 'luong'):?>

<?php

    $current_date = date('Y-m-d');
    if(isset($_GET['current_date'])) {
        $current_date = $_GET['current_date'];
    }

    $indexcount__Get_By_Date = $indexcount->indexcount__Get_By_Date($current_date);
    $id_index = $indexcount__Get_By_Date->id_index;
    
    if(isset($_GET['id_index'])) {
        $id_index = $_GET['id_index'];
    }
    
    $indexcount__Get_By_Id = $indexcount->indexcount__Get_By_Id($id_index);
    $indexcount__Get_All = $indexcount->indexcount__Get_All();

    $luong__Get_By_Index_Group_By_Nhan_Vien = $kpi->luong__Get_By_Index_Group_By_Nhan_Vien($id_index);
    $luong__Get_Nhan_Vien_By_Id_Index_Not_In = $kpi->luong__Get_Nhan_Vien_By_Id_Index_Not_In($id_index);

    $da_xac_nhan = 0;
    $sum_xac_nhan = 0;
    foreach($luong__Get_By_Index_Group_By_Nhan_Vien as $item){
        $da_xac_nhan += $item->thanh_tien > 0 ? 1 : 0;
        foreach($kpi->luong__Get_By_Id_Nhan_Vien_And_Id_Index($item->id_nv, $id_index) as $item_2){
            $sum_xac_nhan += $item_2->thanh_tien;
        }
    }

?>

<!-- main-container -->

<div class="main-container">
    <div class="main-container__add w-400px">
        <div class="main-container__add-form">
            <div class="text-title">
                Thêm KPI
                <div class="text-muted">
                    Vui lòng chọn kỳ chấm công
                </div>
            </div>
            <form action="quan-ly-kpi/action.php?page=luong&req=add" method="post" enctype="multipart/form-data">
                <div class="form-group mt-1 d-flex">
                    <div class="form-group">
                        <label class="">Chọn kỳ</label>
                        <select name="id_index" id="id_index" required="" onchange="location = this.value;"
                            class="form-select w-fct">
                            <option value="<?=$id_index?>"><?=$indexcount__Get_By_Id->ten_index?>
                                (<?=date('d/m/Y', strtotime($indexcount__Get_By_Id->ngay_bat_dau))?> -
                                <?=date('d/m/Y', strtotime($indexcount__Get_By_Id->ngay_ket_thuc))?>)</option>
                            <?php foreach ($indexcount__Get_All as $item) :?>
                            <?php if($indexcount__Get_By_Id->id_index != $item->id_index):?>
                            <option value="index.php?page=quan-ly-kpi&req=luong&id_index=<?= $item->id_index; ?>">
                                <?= $item->ten_index; ?>
                                (<?=date('d/m/Y', strtotime($item->ngay_bat_dau))?> -
                                <?=date('d/m/Y', strtotime($item->ngay_ket_thuc))?>)</option>
                            <?php endif?>
                            <?php endforeach?>
                        </select>
                    </div>
                    <?php if(count($luong__Get_By_Index_Group_By_Nhan_Vien)>0):?>
                    <button class="btn btn-danger m-2 mt-4" type="button"
                        onclick="return confirm_sweet('quan-ly-kpi/action.php?page=luong&req=delete&id_index=<?=$id_index?>')">Xóa
                        <?=$indexcount__Get_By_Id->ten_index?>
                    </button>
                    <?php else:?>
                    <div class="form-group m-2 mt-4">
                        <button class="btn btn-primary" type="submit">Khởi tạo</button>
                    </div>
                    <?php endif?>
                </div>
            </form>
            <br>
            <?php if(count($luong__Get_Nhan_Vien_By_Id_Index_Not_In)>0):?>
            <form action="quan-ly-kpi/action.php?page=luong&req=add_by_nv" method="post" enctype="multipart/form-data">
                <div class="form-group mt-1 d-flex">
                    <div class="form-group">
                        <input type="hidden" name="id_index" value=<?=$id_index?>>
                        <label class="">Chọn nhân viên chưa có bảng lương</label>
                        <select name="id_nv" id="id_nv" required="" class="form-select w-fct">
                            <?php foreach ($luong__Get_Nhan_Vien_By_Id_Index_Not_In as $item) :?>
                            <option value="<?=$item->id_nv; ?>">
                                <?= $item->ho_ten ?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                    <div class="form-group m-2 mt-4">
                        <button class="btn btn-primary" type="submit">Tạo bảng lương</button>
                    </div>
                </div>
            </form>
            <?php endif?>
            <br>
            <?php if(count($luong__Get_By_Index_Group_By_Nhan_Vien)<1):?>
            <form action="quan-ly-kpi/action.php?page=luong&req=copy_luong" method="post" enctype="multipart/form-data">
                <div class="form-group mt-1 d-flex">
                    <div class="form-group">
                        <input type="hidden" name="id_index" value=<?=$id_index?>>
                        <label class="">Chọn Kỳ để copy</label>
                        <select name="id_index_copy" id="id_index_copy" required="" class="form-select w-fct">
                            <?php foreach ($indexcount__Get_All as $item) :?>
                            <?php if($item->id_index != $id_index):?>
                            <option value="<?= $item->id_index; ?>">
                                <?= $item->ten_index; ?>
                                (<?=date('d/m/Y', strtotime($item->ngay_bat_dau))?> -
                                <?=date('d/m/Y', strtotime($item->ngay_ket_thuc))?>)</option>
                            <?php endif?>
                            <?php endforeach?>
                        </select>
                    </div>
                    <div class="form-group m-2 mt-4">
                        <button class="btn btn-danger" type="submit">Copy</button>
                    </div>
                </div>
            </form>
            <?php endif?>


        </div>
    </div>
    <div class="main-container__update w-0"></div>
    <div class="main-container__view w-100-400px">
        <div class="text-title">
            Khu vực hiển thị
            <div class="text-muted">
                Số lượng: <b class="text-danger"><?=count($luong__Get_By_Index_Group_By_Nhan_Vien)?> </b>
                <br>
                Đã xác nhận lương: <b class="text-danger"><?=$da_xac_nhan?> /
                    <?=count($luong__Get_By_Index_Group_By_Nhan_Vien)?> Nhân viên
                    (<?=$fm->format_money($sum_xac_nhan)?>)</b>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table" style="width:100%" id="table_quan_ly_kpi__luong">
                <thead>
                    <tr class="title_table">
                        <td>#</td>
                        <td>Tên nhân viên</td>
                        <td>Số KPI</td>
                        <td>Số ngày vắng</td>
                        <td>Lương thực nhận</td>
                        <?php if($SS_LEVEL == 0):?>
                        <td>Thao tác</td>
                        <?php endif?>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 0?>
                    <?php foreach($luong__Get_By_Index_Group_By_Nhan_Vien as $item): ?>
                    <tr class="td_hover" onclick="update_obj(<?=$item->id_nv?>)">
                        <td><?=++$count?></td>
                        <td><?=$item->ten_nv?></td>
                        <?php
                            $sum_kpi = 0;
                            $sum_luong = 0;
                            foreach($kpi->luong__Get_By_Id_Nhan_Vien_And_Id_Index($item->id_nv, $id_index) as $item_2){
                                $sum_kpi++;
                                $sum_luong += $item_2->thanh_tien;
                            }
                        ?>
                        <td><?=$item->so_ngay_vang == -1 ? "Chưa xác nhận" : $sum_kpi?></td>
                        <td><?=$item->so_ngay_vang == -1 ? "Chưa xác nhận" : $item->so_ngay_vang?></td>
                        <td><?=$item->so_ngay_vang == -1 ? "Chưa xác nhận" : $fm->format_money($sum_luong)?></td>
                        <?php if($SS_LEVEL == 0):?>
                        <td class="t-right"
                            onclick="return confirm_sweet('quan-ly-kpi/action.php?page=luong&req=delete_by_nv&id_nv=<?=$item->id_nv?>&id_index=<?=$item->id_index?>')">
                            <i class="bx bxs-trash-alt"></i>
                        </td>
                        <?php endif?>
                    </tr>
                    <?php endforeach?>

                </tbody>
            </table>
        </div>
    </div>

    <script>
    window.addEventListener('load', function() {
        $('.main-container__update').hide();

        var btn_ttbs = document.querySelector(".btn_ttbs");

        $('#table_quan_ly_kpi__luong').DataTable({
            fixedHeader: true,
            "lengthMenu": [
                [-1, 10, 25, 50],
                ["All", 10, 25, 50]
            ],
        });

    });

    function update_obj(id_nv) {
        var update = document.querySelector(".main-container__update");
        var view = document.querySelector(".main-container__view");
        var add = document.querySelector(".main-container__add");

        update.classList.remove("w-0");
        update.classList.add("w-685px");
        add.classList.remove("w-400px");
        add.classList.add("w-800px");
        add.classList.add("hide");
        view.classList.remove("w-100-400px");
        view.classList.add("w-100-800px");
        $('.main-container__update').show();

        id_index = $('#id_index').val();
        $.post("quan-ly-kpi/update.php", {
            page_update: "luong",
            id_nv: id_nv,
            id_index: id_index,
        }, function(data, status) {
            $(".main-container__update").html(data);
        });
    };
    </script>
</div>

<?php endif?>
<!-- end luong-->
<!-- end main-container -->