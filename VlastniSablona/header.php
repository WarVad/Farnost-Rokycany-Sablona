<!DOCTYPE html>

<html <?php language_attributes();?>>

    <head>

        <meta charset=<?php bloginfo("charset");?>>

        <title><?php wp_title();?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://farnost-rokycany.cz//wp-content/themes/VlastniSablona/fonts/Poppins/Poppins-Black.tff" type="font/tff" crossorigin>

       

        <link rel="stylesheet" href="https://farnost-rokycany.cz//wp-content/themes/VlastniSablona/style/dist/header.css">

        <link rel="stylesheet" href="https://farnost-rokycany.cz//wp-content/themes/VlastniSablona/style/dist/footer.css">

        <link rel="stylesheet" href="https://farnost-rokycany.cz//wp-content/themes/VlastniSablona/style/dist/card.css">

        <link rel="stylesheet" href="https://farnost-rokycany.cz//wp-content/themes/VlastniSablona/style/dist/obsah.css">

        <link rel="stylesheet" href="https://farnost-rokycany.cz//wp-content/themes/VlastniSablona/style/dist/prispevek.css">



        <script src="https://farnost-rokycany.cz//wp-content/themes/VlastniSablona/scripts/script.js" defer></script>



    </head>

    <body>

        <header class="header">

            <div class="header-wrapper">

                <div class="header-wrapper-logo">

                    <img src="//farnost-rokycany.cz/wp-content/themes/VlastniSablona/obrazky/kostel.png" alt="" id="logo">

                </div>

                <div class="hamburger">

                    <span class="stick1 stick"></span>

                    <span class="stick2 stick"></span>

                    <span class="stick3 stick"></span>

                </div>

               

            </div>

            <nav class="nav">

                <?php wp_nav_menu(["menu" => "main"]);?>

            </nav>

        </header>