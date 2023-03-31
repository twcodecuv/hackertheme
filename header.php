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
    body {
        margin: 0;
        padding: 0;
    }


    .nav_container {
        padding-top: 1em;
        width: 100%;
        background: #fff9f3;
        margin: 1em 0;
        height: 10vh;
        color: #0d2f1f;
    }

    .nav_box {
        display: flex;
        justify-content: space-between;
        list-style: none;
        padding: 0 15em;
    }

    a {
        display: block;
        width: 185px;
        padding: 0.6em;
    }

    li>a {
        color: #0d2f1f;
        list-style: none;
        text-decoration: none;
        transition: all cubic-bezier(0.4, 0, 0.2, 1)0.4s;
        transform-origin: 50% -50px;
        transition-property: transform, opacity, visablity, -webkit-transform;
        transition-duration: 1.5s;

    }

    li {
        position: relative;
        display: block;
        transition-duration: 1.5s;
    }


    ul li ul {
        visibility: hidden;
        opacity: 0;
        position: absolute;
        transition: all 0.5s ease;
        margin-top: 1em;
        left: 30%;
        display: none;
        transition: all cubic-bezier(0.4, 0, 0.2, 1)12s;
        transform-origin: 50% -50px;
        transition-property: transform, opacity, visablity, -webkit-transform;
    }


    ul li:hover>ul,
    ul li:focus-within>ul,
    ul li ul:hover {

        visibility: visible;
        opacity: 1;
        display: block;
        transition: all 0.5s ease;
    }

    .nav_box li>ul {

        transition: all cubic-bezier(0.4, 0, 0.2, 1)0.4s;
        transform-origin: 50% -50px;
        transition-property: transform, opacity, visablity, -webkit-transform;
        transform: perspective(300px)rotateX(-3deg);
        opacity: 0;
        visibility: hidden;
    }


    /* This is for Id specific sub-menu styles */

    li>.sub-menu {
        left: 0;
        border-radius: 7px;
    }

    .sub-menu .sub-menu {
        padding: 0;
        left: 200px;
        top: 0;
        box-shadow: 0 20px 32px -8px rgb(0 0 0 / 15%), 0 0 1px rgb(0 0 0 / 5%);
        transition: all cubic-bezier(0.4, 0, 0.2, 1)0.4s;
        transform-origin: 50% -50px;
        transition-property: transform, opacity, visablity, -webkit-transform;

    }

    .sub-menu {
        margin: 0;
        padding: 0;
        background: #fff;

    }

    .sub-menu>li {
        width: 200px;

    }

    .sub-menu>li:hover {
        cursor: pointer;
        background: #88888814;
    }

    /* This is for Id specific sub-menu styles */
    </style>
    </header>

</body>
</html>