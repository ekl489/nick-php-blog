<?php 
    // route to correct controller
    $path = explode('/', $_SERVER['REQUEST_URI']); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nick's PHP Blog</title>

    <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
        // show navbar
        require_once 'views/nav.view.php';
    ?>

    <br>
    <div class="container">
        <?php

            // show correct page

            switch($path[1]){
                case "":
                    require_once 'controllers/home.controller.php';
                    break;
                case "posts":
                    require_once 'controllers/posts.controller.php';
                    break;
                default:
                    require_once 'controllers/page-not-found.controller.php';
                    break;
            }
        ?>
    </div>
</body>
</html>

