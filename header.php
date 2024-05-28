<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(''); ?></title>
    <!-- Länkar in favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <!-- Länkar in CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    <!-- Länkar in ikon-kit -->
    <script src="https://kit.fontawesome.com/b074591ff2.js" crossorigin="anonymous"></script>
    <!-- Lägger till hook -->
    <?php wp_head(); ?>
</head>

<body>
    <div id="page-container">
        <div id="content-wrap">
            <!-- Sidhuvud -->
            <header>
                <!-- Logotyp -->
                <div id="logo">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logotyp.svg" alt="Lugnets logotyp" width="200" height="116">
                    </a>
                </div>
                <!-- Navigeringsmeny -->
                <nav>
                    <?php wp_nav_menu('main-menu'); ?>
                </nav>
            </header>