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
    a {
        display: block;
        width: 185px;
        padding: 1em;
    }

    /* This is for Id specific sub-menu styles */

    li>.sub-menu {
        left: 0;
        border-radius: 10px;
    }




    .sub-menu .sub-menu {
        padding: 0;
        left: 200px;
        top: 0;
    }

    /* This is for Id specific sub-menu styles */
    .nav_container {
        padding-top: 1em;
        width: 100%;
        background: #fff9f3;
        margin: 1em 0;
        height: 10vh;
    }

    .nav_box {
        display: flex;
        justify-content: space-between;
        list-style: none;
        padding: 0 15em;
    }

    .sub-menu {
        margin: 0;
        padding: 0;
        background: #fff9f3;
    }

    .sub-menu>li {
        width: 200px;

    }


    li>a {
        color: #0d2f1f;
        list-style: none;
        text-decoration: none;
    }

    li {
        position: relative;
        display: block;
        transition-duration: 0.5s;
    }

    .sub-menu>li:hover {
        color: blue;
        cursor: pointer;
        background: #888888;
    }

    ul li ul {
        visibility: hidden;
        opacity: 0;
        position: absolute;
        transition: all 0.5s ease;
        margin-top: 1em;
        left: 30%;
        display: none;
    }


    ul li:hover>ul,
    ul li:focus-within>ul,
    ul li ul:hover {

        visibility: visible;
        opacity: 1;
        display: block;
    }




    body {
        margin: 0;
        padding: 0;
    }
    </style>
    </header>

</body>
</html>