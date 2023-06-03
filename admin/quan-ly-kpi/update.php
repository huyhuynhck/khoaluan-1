<!-- nhom-kpi-->
<?php if($_POST['page_update'] == 'nhom-kpi'):?>

<?php
    require "../../models/getModel.php";

    $id_nhom_kpi = $_POST['id_nhom_kpi'];
    $nhomkpi__Get_By_Id = $kpi->nhomkpi__Get_By_Id($id_nhom_kpi);

    ?>

<div class="main-container__add-form">
    <div class="text-title">
        Cập nhật nhóm kpi</b>
        <div class="btn_hide">
            <i class='bx bx-window-close'></i>
        </div>

    </div>

    <form action="quan-ly-kpi/action.php?page=nhom-kpi&req=update" method="post" enctype="multipart/form-data">
        <input type="hidden" id="id_nhom_kpi" name="id_nhom_kpi" class="form-control" required readonly required
            value="<?=$id_nhom_kpi?>">
        <div class="m-1">
            <div class="form-group mt-1">
                <label for="">Tên nhóm kpi</label>
                <input type="text" id="ten_nhom_kpi" name="ten_nhom_kpi" class="form-control" required="" required
                    value="<?=$nhomkpi__Get_By_Id->ten_nhom_kpi?>" />
            </div>

            <div class="form-group mt-1">
                <label for="">Ghi chú</label>
                <textarea class="form-control" name="ghi_chu" id="ghi_chu"><?=$nhomkpi__Get_By_Id->ghi_chu?></textarea>
            </div>
            <div class="form-group mt-2 mb-5 t-center">
                <button type="submit" class="btn btn-danger">Cập nhật thông tin</button>
            </div>
        </div>
    </form>
</div>

<script>
var btn_hide = document.querySelector(".btn_hide");
$('.ttbs_update').toggle(0, 'linear');

btn_hide.addEventListener("click", function() {
    $('.main-container__add').show();
    $('.main-container__update').hide();
    $('.main-container__add').removeClass("hide");

    $('.main-container__add').removeClass("w-30");
    $('.main-container__add').addClass("w-30");

    $('.main-container__update').removeClass("w-30");
    $('.main-container__update').addClass("w-0");
});
</script>
<?php endif?>

<!-- end nhom-kpi -->

<!-- ///////////////////////////////////////// -->

<!-- kpi-->
<?php if($_POST['page_update'] == 'kpi'):?>

<?php
    require "../../models/getModel.php";

    $id_kpi = $_POST['id_kpi'];
    $kpi__Get_By_Id = $kpi->kpi__Get_By_Id($id_kpi);
    $nhomkpi__Get_All = $kpi->nhomkpi__Get_All();

    ?>

<div class="main-container__add-form">
    <div class="text-title">
        Cập nhật kpi</b>
        <div class="btn_hide">
            <i class='bx bx-window-close'></i>
        </div>

    </div>

    <form action="quan-ly-kpi/action.php?page=kpi&req=update" method="post" enctype="multipart/form-data">
        <input type="hidden" id="id_kpi" name="id_kpi" class="form-control" required readonly required
            value="<?=$id_kpi?>">
        <div class="form-group m-1">
            <label for="">Chọn nhóm kpi</label>
            <div class="form-control d-flex-lg-wrap">
                <?php foreach($nhomkpi__Get_All as $item):?>
                <div class="w-47 m-1">
                    <input type="radio" class="btn-check" name="id_nhom_kpi" id="update_<?=$item->id_nhom_kpi?>"
                        required value="<?=$item->id_nhom_kpi?>" autocomplete="off"
                        <?=$item->id_nhom_kpi == $kpi__Get_By_Id->id_nhom_kpi ? 'checked' : ''?>>
                    <label class="btn btn-sm btn-outline-success check w-100"
                        for="update_<?=$item->id_nhom_kpi?>"><?=$item->ten_nhom_kpi?></label>
                </div>
                <?php endforeach?>
            </div>
        </div>
        <div class="m-1">
            <div class="form-group mt-1">
                <label for="">Tên KPI</label>
                <input type="text" class="form-control" name="ten_kpi" placeholder='Nhập tên KPI' id="ten_kpi" required
                    value="<?=$kpi__Get_By_Id->ten_kpi?>" />
            </div>
            <div class="form-group mt-1">
                <label for="">Đơn vị</label>
                <input type="number" max='999999999' step='any' class="form-control hp  w-100" name="don_vi_cb"
                    placeholder='Nhập đơn vị' id="don_vi_cb" required value="<?=$kpi__Get_By_Id->don_vi_cb?>" />
            </div>
            <div class="form-group mt-1">
                <label for="">Hệ số</label>
                <input type="number" max='999999999' step='any' class="form-control hp  w-100" name="he_so_tc"
                    placeholder='Nhập hệ số' id="he_so_tc" required value="<?=$kpi__Get_By_Id->he_so_tc?>" />
            </div>
            <div class="form-group mt-1">
                <label for="">Ghi chú</label>
                <textarea class="form-control" name="ghi_chu_kpi"
                    id="ghi_chu_kpi"><?=$kpi__Get_By_Id->ghi_chu_kpi?></textarea>
            </div>
            <div class="form-group mt-5 t-center">
                <button type="submit" class="btn btn-danger">Cập nhật thông tin</button>
            </div>
        </div>
    </form>
</div>

<script>
var btn_hide = document.querySelector(".btn_hide");
$('.ttbs_update').toggle(0, 'linear');

btn_hide.addEventListener("click", function() {
    $('.main-container__add').show();
    $('.main-container__update').hide();
    $('.main-container__add').removeClass("hide");

    $('.main-container__add').removeClass("w-30");
    $('.main-container__add').addClass("w-30");

    $('.main-container__update').removeClass("w-30");
    $('.main-container__update').addClass("w-0");
});
</script>
<?php endif?>

<!-- end kpi -->

<!-- ///////////////////////////////////////// -->

<!-- luong-->
<?php if($_POST['page_update'] == 'luong'):?>

<?php
    require "../../models/getModel.php";

    $id_nv = $_POST['id_nv'];
    $id_index = $_POST['id_index'];
    $luong__Get_By_Id_Nhan_Vien_And_Id_Index = $kpi->luong__Get_By_Id_Nhan_Vien_And_Id_Index($id_nv, $id_index);
    $kpi__Get_All = $kpi->kpi__Get_All();
    $kpi__Get_All_Not_Exist_By_Nhan_Vien_And_Index = $kpi->kpi__Get_All_Not_Exist_By_Nhan_Vien_And_Index($id_nv, $id_index);

    $ccnv__Get_By_Count_Vang_By_Id_Nv = isset($ccnv->ccnv__Get_By_Count_Vang_By_Id_Nv($id_index, $id_nv)->he_so_cc) ? $ccnv->ccnv__Get_By_Count_Vang_By_Id_Nv($id_index, $id_nv)->he_so_cc : 0;

    ?>

<div class="main-container__add-form">
    <div class="text-title">
        Xác nhận bảng lương
        <div class="btn_hide">
            <i class='bx bx-window-close'></i>
        </div>

    </div>

    <form action="quan-ly-kpi/action.php?page=luong&req=update" method="post" enctype="multipart/form-data"
        target="_blank">
        <div class="add-nl_up form-control">
            <?php $count = 0?>
            <b class="text-name"><?=$luong__Get_By_Id_Nhan_Vien_And_Id_Index[0]->ten_nv?></b>
            <br>
            <div class='form-group m-2 d-flex'>
                <label class="" for="tam_tinh">
                    Tạm tính: <b id="txt_tam_tinh" class="text-danger"></b>
                    <br>
                    Bằng chữ: <b id="txt_tam_tinh_bang_chu" class="text-danger"></b>
                </label>
                <label class="checkbox" for="tam_tinh"></label>
                <input type="hidden" class="form-control  w-fct" readonly id='tam_tinh'>
            </div>
            <hr>
            <input type="hidden" value="<?=$id_nv; ?>" name="id_nv">
            <input type="hidden" value="<?=$id_index; ?>" name="id_index">

            <?php foreach($luong__Get_By_Id_Nhan_Vien_And_Id_Index as $item):?>
            <?php ++$count?>
            <div class="delete-checkbox">
                <input type="hidden" value="<?=$item->id_luong; ?>" name="id_luong[]">
                <input type="hidden" value="<?=$item->id_kpi; ?>" name="id_kpi[]">
                <div class='form-add-nl_up d-flex'>
                    <?php if($count  == 1):?>
                    <div class='form-group m-1 w-fct'>
                        <label class="checkbox" for="<?=$item->id_luong?>"></label>
                        <input type="checkbox" id="<?=$item->id_luong?>" name="id_del[]" value="<?=$item->id_luong?>"
                            disabled>
                    </div>
                    <div class='form-group m-1 w-fct'>
                        <label for="">Tên KPI</label>
                        <input type="text" class="form-control" name="ten_kpi[]" readonly placeholder='Nhập tên KPI'
                            id="ten_kpi" required value="<?=$item->ten_kpi?>" />
                    </div>
                    <div class='form-group m-1 w-fct'>
                        <label for="">Số ngày vắng</label>
                        <input type="number" class="form-control hp" name="so_ngay_vang" placeholder='Số ngày'
                            id="so_ngay_vang" required step="any" min="0"
                            value='<?=$item->so_ngay_vang == -1 ? $ccnv__Get_By_Count_Vang_By_Id_Nv : $item->so_ngay_vang?>' />
                    </div>
                    <div class=' form-group m-1'>
                        <label for="">Đơn vị</label>
                        <input type="number" max='999999999' step='any' class="form-control hp" name="don_vi_cb[]"
                            placeholder='Nhập đơn vị' id="don_vi_cb" required value="<?=$item->don_vi_cb?>" />
                    </div>
                    <div class='form-group m-1'>
                        <label for="">Hệ số</label>
                        <input type="number" max='999999999' step='any' class="form-control hp" name="he_so_thuc[]"
                            placeholder='Nhập hệ số' id="he_so_thuc" required value="<?=$item->he_so_thuc?>" />
                    </div>
                    <div class='form-group m-1 w-fct'>
                        <label for="">Thành tiền</label>
                        <input type='number' max='999999999' step='any' class='form-control hp' name='thanh_tien[]'
                            readonly placeholder='Thành tiền' id='thanh_tien' required value='<?=$item->thanh_tien?>' />
                    </div>
                    <?php if(count($luong__Get_By_Id_Nhan_Vien_And_Id_Index) == $count):?>
                    <div class='form-group w-fct d-flex'>
                        <a href='#' class='add_form_up_field btn btn-sm btn-primary  m-1 '> <i
                                class='bx bx-plus'></i></a>
                        <?php if(count($kpi__Get_All_Not_Exist_By_Nhan_Vien_And_Index)>0):?>
                        <a href='#' class='add_form_up_field_exist btn btn-sm btn-secondary  m-1 '> <i
                                class='bx bx-plus'></i></a>
                        <?php endif?>
                    </div>
                    <?php endif?>
                    <?php else:?>

                    <?php if($count  == 2):?>
                    <div class='form-group m-1 w-fct'>
                        <label class="checkbox" for="<?=$item->id_luong?>"></label>
                        <input type="checkbox" id="<?=$item->id_luong?>" name="id_del[]" value="<?=$item->id_luong?>">
                    </div>
                    <div class='form-group m-1 w-fct'>
                        <label for="">Tên KPI</label>
                        <input type="text" class="form-control" name="ten_kpi[]" readonly placeholder='Nhập tên KPI'
                            id="ten_kpi" required value="<?=$item->ten_kpi?>" />
                    </div>

                    <div class=' form-group m-1'>
                        <label for="">Đơn vị</label>
                        <input type="number" max='999999999' step='any' class="form-control hp" name="don_vi_cb[]"
                            placeholder='Nhập đơn vị' id="don_vi_cb" required value="<?=$item->don_vi_cb?>" />
                    </div>
                    <div class='form-group m-1'>
                        <label for="">Hệ số</label>
                        <input type="number" max='999999999' step='any' class="form-control hp" name="he_so_thuc[]"
                            placeholder='Nhập hệ số' id="he_so_thuc" required value="<?=$item->he_so_thuc?>" />
                    </div>
                    <div class='form-group m-1 w-fct'>
                        <label for="">Thành tiền</label>
                        <input type='number' max='999999999' step='any' class='form-control hp' name='thanh_tien[]'
                            readonly placeholder='Thành tiền' id='thanh_tien' required value='<?=$item->thanh_tien?>' />
                    </div>
                    <?php else:?>
                    <div class='form-group m-1 w-fct'>
                        <label class="checkbox" for="<?=$item->id_luong?>"></label>
                        <input type="checkbox" id="<?=$item->id_luong?>" name="id_del[]" value="<?=$item->id_luong?>">
                    </div>
                    <div class='form-group m-1 w-fct'>
                        <input type="text" class="form-control" name="ten_kpi" readonly placeholder='Nhập tên KPI'
                            id="ten_kpi" required value="<?=$item->ten_kpi?>" />
                    </div>
                    <div class='form-group m-1'>
                        <input type="number" max='999999999' step='any' class="form-control hp" name="don_vi_cb[]"
                            placeholder='Nhập đơn vị' id="don_vi_cb" required value="<?=$item->don_vi_cb?>" />
                    </div>
                    <div class='form-group m-1'>
                        <input type="number" max='999999999' step='any' class="form-control hp" name="he_so_thuc[]"
                            placeholder='Nhập hệ số' id="he_so_thuc" required value="<?=$item->he_so_thuc?>" />
                    </div>
                    <div class='form-group m-1 w-fct'>
                        <input type='number' max='999999999' step='any' class='form-control hp' name='thanh_tien[]'
                            readonly placeholder='Thành tiền' id='thanh_tien' required value='<?=$item->thanh_tien?>' />
                    </div>
                    <?php endif?>
                    <?php if(count($luong__Get_By_Id_Nhan_Vien_And_Id_Index) == $count):?>
                    <div class='form-group w-fct d-flex'>
                        <a href='#' class='add_form_up_field btn btn-sm btn-primary  m-1 '> <i
                                class='bx bx-plus'></i></a>
                        <?php if(count($kpi__Get_All_Not_Exist_By_Nhan_Vien_And_Index)>0):?>
                        <a href='#' class='add_form_up_field_exist btn btn-sm btn-secondary  m-1 '> <i
                                class='bx bx-plus'></i></a>
                        <?php endif?>

                    </div>
                    <?php endif?>
                    <?php endif?>
                </div>
            </div>
            <?php endforeach?>
        </div>
        <div class="form-group mt-2 mb-5 t-center">
            <button type="submit" class="btn btn-danger" onclick="reload_page()">Cập nhật và In phiếu</button>
        </div>
    </form>
</div>

<script>
var btn_hide = document.querySelector(".btn_hide");
$('.ttbs_update').toggle(0, 'linear');

btn_hide.addEventListener("click", function() {
    $('.main-container__add').show();
    $('.main-container__update').hide();
    $('.main-container__add').removeClass("hide");

    $('.main-container__add').removeClass("w-800px");
    $('.main-container__add').addClass("w-400px");

    $('.main-container__view').removeClass("w-100-800px");
    $('.main-container__view').addClass("w-100-400px");

    $('.main-container__update').removeClass("w-685px");
    $('.main-container__update').addClass("w-0");
});

var formatter = new Intl.NumberFormat('vi-VN', {
    style: 'currency',
    currency: 'VND',
});

////////////////////
var max_fields = 10;
var max_fields_exist = 10;
var wrapper = $(".add-nl_up");
var wrapper_exist = $(".add-nl_up");
var add_button = $(".add_form_up_field");
var add_button_exist = $(".add_form_up_field_exist");

var x = 1;
$(add_button).click(function(e) {
    e.preventDefault();

    if (x < max_fields) {
        x++;
        $(wrapper).append(
            "<div class='form-add-nl d-flex ml-22px'>" +
            "<div class=' form-group m-1 w-fct'>" +
            "    <input type='text' class='form-control' name='ten_kpi_add[]' placeholder='Nhập tên KPI' id='ten_kpi_add[]' required />" +
            "</div>" +
            "<div class='form-group m-1'>" +
            "    <input type='number' max='999999999'  step='any' class='form-control hp' name='don_vi_cb_add[]' placeholder='Nhập đơn vị' id='don_vi_cb'" +
            "        required />" +
            "</div>" +
            "<div class=' form-group m-1'>" +
            "    <input type='number' max='999999999'  step='any' class='form-control hp' name='he_so_thuc_add[]' placeholder='Nhập hệ số' id='he_so_thuc'" +
            "        required />" +
            "</div>" +
            "<div class='form-group m-1 w-fct'>" +
            "    <input type='number' max='999999999'  step='any' class='form-control hp' name='thanh_tien_add[]' placeholder='Thành tiền' id='thanh_tien' required readonly/>" +
            "</div>" +
            "<div class='form-group m-1 w-fct'>" +
            "<a href='#' class='delete btn btn-sm btn-warning'> <i class='bx bx-minus'></i> </a>" +
            "</div>" +
            "</div>"
        ); //add input box
        txt_tam_tinh_bang_chu = document.querySelector("#txt_tam_tinh_bang_chu");
        txt_tam_tinh = document.querySelector("#txt_tam_tinh");
        tam_tinh = document.querySelector("#tam_tinh");
        so_ngay_vang = document.querySelector("#so_ngay_vang");
        thanh_tien = document.querySelectorAll("#thanh_tien");
        he_so_thuc = document.querySelectorAll(
            "#he_so_thuc");
        don_vi_cb = document.querySelectorAll("#don_vi_cb");


        $('.hp').change(function() {
            sum = 0;
            sum_first = 0;
            sum_to = 0;
            sum_first += thanh_tien[0].value = (((he_so_thuc[0].value * don_vi_cb[0].value) / 26) * (
                26 - so_ngay_vang
                .value)).toFixed();
            for (var i = 1; i < don_vi_cb.length; i++) {
                sum_to += thanh_tien[i].value = he_so_thuc[i].value * don_vi_cb[i].value;
            }
            sum = parseFloat(sum_first) + parseFloat(sum_to);
            tam_tinh.value = sum;
            txt_tam_tinh.textContent = formatter.format(sum);
            txt_tam_tinh_bang_chu.textContent = DocTienBangChu(sum);

        });
    } else {
        alert('You Reached the limits')
    }
});

$(wrapper).on("click", ".delete", function(e) {
    e.preventDefault();
    $(this).parent('div').parent('div').remove();
    x--;

});

$(wrapper).on("click", ".delete", (function() {
    txt_tam_tinh_bang_chu = document.querySelector("#txt_tam_tinh_bang_chu");
    txt_tam_tinh = document.querySelector("#txt_tam_tinh");
    tam_tinh = document.querySelector("#tam_tinh");
    so_ngay_vang = document.querySelector("#so_ngay_vang");
    thanh_tien = document.querySelectorAll("#thanh_tien");
    he_so_thuc = document.querySelectorAll(
        "#he_so_thuc");
    don_vi_cb = document.querySelectorAll("#don_vi_cb");


    sum = 0;
    sum_first = 0;
    sum_to = 0;
    sum_first += thanh_tien[0].value = (((he_so_thuc[0].value * don_vi_cb[0].value) / 26) * (26 -
        so_ngay_vang
        .value)).toFixed();
    for (var i = 1; i < don_vi_cb.length; i++) {
        sum_to += thanh_tien[i].value = he_so_thuc[i].value * don_vi_cb[i].value;
    }
    sum = parseFloat(sum_first) + parseFloat(sum_to);
    tam_tinh.value = sum;
    txt_tam_tinh.textContent = formatter.format(sum);
    txt_tam_tinh_bang_chu.textContent = DocTienBangChu(sum);
}));

////////////////////

var y = 1;
$(add_button_exist).click(function(e) {
    e.preventDefault();

    if (y < max_fields_exist) {
        y++;
        $(wrapper_exist).append(
            "<div class='form-add-nl d-flex ml-22px'>" +
            "<div class=' form-group m-1 w-fct'>" +
            "<select name='id_kpi_add[]' class='form-select chosen' id='id_kpi_add' required=''>" +
            "<?php foreach($kpi__Get_All_Not_Exist_By_Nhan_Vien_And_Index as $k):?>" +
            "<option value='<?php echo $k->id_kpi; ?>'><?php echo $k->ten_kpi; ?>" +
            "</option>" +
            "<?php endforeach?>" +
            "</select>" +
            "</div>" +
            "<div class='form-group m-1'>" +
            "    <input type='number' max='999999999'  step='any' class='form-control hp' name='don_vi_cb_add[]' placeholder='Nhập đơn vị' id='don_vi_cb'" +
            "        required />" +
            "</div>" +
            "<div class=' form-group m-1'>" +
            "    <input type='number' max='999999999'  step='any' class='form-control hp' name='he_so_thuc_add[]' placeholder='Nhập hệ số' id='he_so_thuc'" +
            "        required />" +
            "</div>" +
            "<div class='form-group m-1 w-fct'>" +
            "    <input type='number' max='999999999'  step='any' class='form-control hp' name='thanh_tien_add[]' placeholder='Thành tiền' id='thanh_tien' required readonly/>" +
            "</div>" +
            "<div class='form-group m-1 w-fct'>" +
            "<a href='#' class='delete btn btn-sm btn-warning'> <i class='bx bx-minus'></i> </a>" +
            "</div>" +
            "</div>"
        ); //add input box
        txt_tam_tinh_bang_chu = document.querySelector("#txt_tam_tinh_bang_chu");
        txt_tam_tinh = document.querySelector("#txt_tam_tinh");
        tam_tinh = document.querySelector("#tam_tinh");
        so_ngay_vang = document.querySelector("#so_ngay_vang");
        thanh_tien = document.querySelectorAll("#thanh_tien");
        he_so_thuc = document.querySelectorAll(
            "#he_so_thuc");
        don_vi_cb = document.querySelectorAll("#don_vi_cb");


        $('.hp').change(function() {
            sum = 0;
            sum_first = 0;
            sum_to = 0;
            sum_first += thanh_tien[0].value = (((he_so_thuc[0].value * don_vi_cb[0].value) / 26) * (
                26 - so_ngay_vang
                .value)).toFixed();
            for (var i = 1; i < don_vi_cb.length; i++) {
                sum_to += thanh_tien[i].value = he_so_thuc[i].value * don_vi_cb[i].value;
            }
            sum = parseFloat(sum_first) + parseFloat(sum_to);
            tam_tinh.value = sum;
            txt_tam_tinh.textContent = formatter.format(sum);
            txt_tam_tinh_bang_chu.textContent = DocTienBangChu(sum);

        });
    } else {
        alert('You Reached the limits')
    }
});

$(wrapper_exist).on("click", ".delete_exits", function(e) {
    e.preventDefault();
    $(this).parent('div').parent('div').remove();
    y--;

});

$(wrapper_exist).on("click", ".delete", (function() {
    txt_tam_tinh_bang_chu = document.querySelector("#txt_tam_tinh_bang_chu");
    txt_tam_tinh = document.querySelector("#txt_tam_tinh");
    tam_tinh = document.querySelector("#tam_tinh");
    so_ngay_vang = document.querySelector("#so_ngay_vang");
    thanh_tien = document.querySelectorAll("#thanh_tien");
    he_so_thuc = document.querySelectorAll(
        "#he_so_thuc");
    don_vi_cb = document.querySelectorAll("#don_vi_cb");


    sum = 0;
    sum_first = 0;
    sum_to = 0;
    sum_first += thanh_tien[0].value = (((he_so_thuc[0].value * don_vi_cb[0].value) / 26) * (26 -
        so_ngay_vang
        .value)).toFixed();
    for (var i = 1; i < don_vi_cb.length; i++) {
        sum_to += thanh_tien[i].value = he_so_thuc[i].value * don_vi_cb[i].value;
    }
    sum = parseFloat(sum_first) + parseFloat(sum_to);
    tam_tinh.value = sum;
    txt_tam_tinh.textContent = formatter.format(sum);
    txt_tam_tinh_bang_chu.textContent = DocTienBangChu(sum);
}));




txt_tam_tinh_bang_chu = document.querySelector("#txt_tam_tinh_bang_chu");
txt_tam_tinh = document.querySelector("#txt_tam_tinh");
tam_tinh = document.querySelector("#tam_tinh");
so_ngay_vang = document.querySelector("#so_ngay_vang");
thanh_tien = document.querySelectorAll("#thanh_tien");
he_so_thuc = document.querySelectorAll(
    "#he_so_thuc");
don_vi_cb = document.querySelectorAll("#don_vi_cb");

sum = 0;
sum_first = 0;
sum_to = 0;
sum_first += thanh_tien[0].value = (((he_so_thuc[0].value * don_vi_cb[0].value) / 26) * (26 - so_ngay_vang
    .value)).toFixed();
for (var i = 1; i < don_vi_cb.length; i++) {
    sum_to += thanh_tien[i].value = he_so_thuc[i].value * don_vi_cb[i].value;
}
sum = parseFloat(sum_first) + parseFloat(sum_to);

tam_tinh.value = sum;
txt_tam_tinh.textContent = formatter.format(sum);
txt_tam_tinh_bang_chu.textContent = DocTienBangChu(sum);

$('.hp').change(function() {
    sum = 0;
    sum_first = 0;
    sum_to = 0;
    sum_first += thanh_tien[0].value = (((he_so_thuc[0].value * don_vi_cb[0].value) / 26) * (26 - so_ngay_vang
        .value)).toFixed();
    for (var i = 1; i < don_vi_cb.length; i++) {
        sum_to += thanh_tien[i].value = he_so_thuc[i].value * don_vi_cb[i].value;
    }
    sum = parseFloat(sum_first) + parseFloat(sum_to);
    tam_tinh.value = sum;
    txt_tam_tinh.textContent = formatter.format(sum);
    txt_tam_tinh_bang_chu.textContent = DocTienBangChu(sum);

});
</script>
<?php endif?>

<!-- end luong -->