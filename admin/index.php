<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KHÓA LUẬN</title>
    <link rel="icon" href="../assets/img/favicon.ico" type="image/gif" sizes="16x16">
    <meta name="description" content="KHÓA LUẬN">
    <!-- CSS Files -->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/vendor/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../assets/vendor/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/vendor/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/vendor/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/vendor/plugins/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- header -->
        <?php require 'layouts/header.php';?>

        <!-- sidebar -->
        <?php require 'layouts/sidebar.php';?>

        <!-- controller -->
        <?php require 'controller.php';?>

        <!-- footer -->
        <?php require 'layouts/footer.php';?>

    </div>

    <!-- Js Files -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../assets/vendor/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/vendor/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../assets/vendor/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../assets/vendor/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../assets/vendor/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../assets/vendor/plugins/jszip/jszip.min.js"></script>
    <script src="../assets/vendor/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../assets/vendor/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../assets/vendor/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../assets/vendor/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../assets/vendor/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../assets/vendor/plugins/dist/js/adminlte.min.js"></script>

    <script src="../assets/vendor/sweetalert2@11.js"></script>

    <?php
       if(isset($_GET['status'])){
           if($_GET['status'] == "success"){
               echo "<script>
               Swal.fire(
                   'Thành công!',
                   'Thao tác thành công!',
                   'success'
                 )</script>";
           }
           if($_GET['status'] == "failed"){
               echo "<script>
               Swal.fire(
                   'Thất bại!',
                   'Thao tác không thành công!',
                   'error'
                 )</script>";
           }
       }
?>
</body>

</html>