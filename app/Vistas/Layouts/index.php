<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="public/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="public/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        <?php 
            if(isset($_SESSION['rol'])){
                if($_SESSION['rol'] != 'admin'){
                    include_once $_SERVER['DOCUMENT_ROOT']."/Vistas/Layouts/styles.css";
                }
            }else{
                include_once $_SERVER['DOCUMENT_ROOT']."/Vistas/Layouts/styles.css";
            }
        ?> 
    </style>
</head>
<body>
    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/router.php'?>
</body>
</html>