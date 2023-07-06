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



    <style>
    /* Main Container Styles  */
    #main-head {
        display: block;
        margin: 0 auto;
        padding: 0;
        max-width: 100%;
        text-align: center;
    }

    #mega-menu-wrap-second_menu {
        background: #fff;
        padding: 1em 0;
    }

    #mega-menu-wrap-second_menu #mega-menu-second_menu {
        text-align: center;
        color: #000;
    }

    /* End Of Main Container Styles  */

    #mega-menu-wrap-second_menu #mega-menu-second_menu>li.mega-menu-item>a.mega-menu-link {
        color: #000;
        padding: 0 2em;
    }

    .custom-logo {
        width: 150px;
        height: 100px;
    }
    </style>

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



        <div class=" box ">

            <?php  the_field('home_sub_heading');?>

        </div>

    </header>



    </header>

</body>
</html>