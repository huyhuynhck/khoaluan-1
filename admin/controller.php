<?php 
    if(isset($_GET["page"])){
        switch($_GET["page"]){
            case "dashboard":
                require "layouts/dashboard.php";
                break;
            case "quan-ly-trinh-do":
                require "quan-ly-trinh-do/index.php";
                break;   
            case "error":
                require "layouts/error.php";
                break;
            default:
                echo "<script>location.href = 'index.php?page=error'</script>";
                break;
        }
    }else{
            echo "<script>location.href = 'index.php?page=dashboard'</script>";
        }

?>