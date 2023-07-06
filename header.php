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

    <header id="main-head">
        <?php if( function_exists('the_custom_logo')) { ?>
        <div class="container-logo">
            <?php the_custom_logo(); ?>
        </div>
        <?php } ?>

        <?php wp_nav_menu( array (
                'theme_location'  => 'second_menu', 
                'menu_class' => 'nav-box', 
                'container' => 'nav',
                'container_class' => 'nav-container'
            )); ?>


        <div id="site-navigation" class="mobile-navigation" role="navigation">
            <button class="nav-menu"> Menu</button>
            <div class=" wrapper-nav ">
                <?php wp_nav_menu (array('theme_location' => 'second_menu',
                'menu_class' => 'nav_menu', 'container' => 'nav' , 'container_class' => 'mobile-nav') ); ?>
            </div>
        </div>

        <div class=" box ">

            <?php  the_field('home_sub_heading');?>

        </div>

    </header>


    <style>
    #main-head {
        background: #fff;
        display: flex;
        justify-content: space-evenly;
    }




    .container-logo img {
        padding-top: 1em;
        width: 150px;
        height: 100px;
    }

    body {
        margin: 0;
        padding: 0;
    }

    .second-nav {
        display: flex;
        width: auto;
        height: auto;
        padding: 1em 4em 1em 4em;
        background: #000;
    }


    /* This is for the logo */



    /* This is for the logo */


    .nav-container {
        padding-top: 0.4em;
        width: auto;
        background: #fff9f3;
        margin: 1em 0;
        height: 6vh;
        color: #0d2f1f;
    }

    .nav-box {
        display: flex;
        justify-content: space-between;
        list-style: none;
        padding: 0 15em;
    }

    .nav-container .sub-menu a {
        display: block;
        width: 185px;
        padding: 0.6em;
        content: " + ";

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

    .nav-container li>a::after {
        content: "+";
        padding-left: 0.5em;
    }

    .nav-container li {
        position: relative;
        display: block;
        transition-duration: 1.5s;
        padding: 1em;

    }



    .nav-container ul li ul {
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


    .nav-container ul li:hover>ul,
    ul li:focus-within>ul,
    ul li ul:hover {

        visibility: visible;
        opacity: 1;
        display: block;
        transition: all 0.5s ease;
    }

    .nav-box li>ul {

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


    /* Resposive Styles  */

    @media screen and (max-width:1246px) and (min-width: 600px) {



        .nav-container ul li:hover>ul {
            position: relative;
        }

        .nav-container ul li ul,
        ul li ul,
        ul li ul {
            position: initial;
            visibility: visible;
            display: block;
            padding: 0;
            margin: 0;

        }

        #main-head {
            display: block;
            height: auto;
        }

        .nav-container {
            display: block;
            width: auto;
            height: auto;
            margin: 0;
            padding: 0;
        }

        .nav-box {
            display: block;
            padding: 0;

        }

        .second-nav {
            display: block;
            width: auto;
            height: auto;
            padding: 4em;
        }

        .sub-menu {
            display: block;
            position: fixed;
            left: 0;
        }

        .sub-menu .sub-menu {
            left: 15px;
            padding: 0;

        }

        .nav-container ul li ul {
            position: absolute;
            left: 0;
        }

    }


    /* Resposive Styles  */
    </style>
    </header>

</body>
</html>