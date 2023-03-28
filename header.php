<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Nav Header</title>
    <link rel="stylesheet" href="style.css">
    <?php  wp_head();  ?>
</head>
<body>

    <?php 
   
   wp_nav_menu(array('theme_location'  => 'second_menu', 
   'menu_class' => 'nav_box', 'container' => 'nav','container_class' => 'nav_container')
);
    
   ?>


    <style>
    .nav_container {
        width: 100%;
        background: #000;
        margin: 0;
        height: 20vh;
    }

    .nav_box {
        display: flex;
        justify-content: space-between;
        list-style: none;
    }

    li>a {
        color: #fff;
        list-style: none;
        text-decoration: none;
    }

    .sub-menu {

        display: none;

    }

    body {
        margin: 0;
        padding: 0;
    }
    </style>
    </header>

</body>
</html>