<?php
    require_once "./config/app.php";
    require_once "./autoload.php";

    require_once "./app/views/inc/session_start.php";

    if(isset($_GET['views'])){
        $url=explode("/",$_GET['views']);
    }else{
        $url=["login"];
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once "./app/views/inc/head.php"; ?>
</head>
<body>
    <?php
        use app\controllers\viewsController;

        $viewsController= new viewsController();
        $vista=$viewsController->obtenerVistasControlador($url[0]);

        if($vista=="login" || $vista=="404"){
            require_once "./app/views/content/".$vista."-view.php";
        }else{
    ?>
    <!-- Main container -->
    <main class="page-container">

        <?php require_once "./app/views/inc/navlateral.php"; ?>       

        <!-- Page content -->
        <section class="full-width pageContent scroll" id="pageContent">

            <?php 
                require_once "./app/views/inc/navbar.php";

                require_once $vista;
            ?>


        </section> <!-- Fin page content -->

    </main> <!-- Fin main container -->
    <?php
        }
        require_once "./app/views/inc/script.php"; 
    ?>
</body>
</html>