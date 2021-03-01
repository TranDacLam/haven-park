<!DOCTYPE html>

<html lang="en-US" class="no-js">

<head>
    <title><?php wp_title('-', true, 'right'); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="<?php echo THEME_URL ?>/favicon.ico">
    <!--    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="preload" href="<?php echo THEME_URL . '/assets/images/bg-1.jpg'  ?>" as="image" media="(min-width: 600px)">
    <link rel="preload" href="<?php echo THEME_URL . '/assets/images/home.png'  ?>" as="image" media="(min-width: 600px)">
    <!-- <link rel="preload" href="<?php echo THEME_URL . '/assets/css/main.css'  ?>" as="style"> -->
    <!-- <link rel="preload" href="<?php echo THEME_URL . '/assets/css/wow.min.js'  ?>" as="script"> -->
    <!-- <link rel="preload" href="<?php echo THEME_URL . '/assets/css/owl.carousel.min.js'  ?>" as="script"> -->
    <!-- <link rel="preload" href="<?php echo THEME_URL . '/assets/css/main.js'  ?>" as="script"> -->

    <?php wp_head(); ?>
    <script>
        let THEME_URL = "<?php echo THEME_URL ?>";
    </script>
</head>

<body <?php body_class(); ?>>