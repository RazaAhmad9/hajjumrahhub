<?php include "./functions.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Trusted Islamic Travel Agency">
    <meta name="keywords" content="Hajj, Umrah, travel, agency">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
        $page_title = isset($_GET['page']) ? ucfirst($_GET['page']) . " - Trusted Islamic Travel Agency in the UK for Umrah Services" : "Trusted Islamic Travel Agency in the UK for Umrah Services";
        display_page_title_in_head($page_title);
    ?>
     <link rel="icon" type="image/x-icon" href="/images/favicon.png">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/global.css" type="text/css">
    <link rel="stylesheet" href="css/font.css" type="text/css">
    <link rel="stylesheet" href="css/navbar.css" type="text/css">
    <link rel="stylesheet" href="css/home.css" type="text/css">
    <link rel="stylesheet" href="css/umrah-packages.css" type="text/css">
    <link rel="stylesheet" href="css/up-form.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css">

    <!-- Preload Fonts -->
    <link rel="preload" href="/font/Montserrat-BlackItalic.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/font/Montserrat-Bold.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/font/Montserrat-Black.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/font/Montserrat-ExtraBold.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/font/Montserrat-ExtraLight.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/font/Montserrat-BoldItalic.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/font/Montserrat-ExtraBoldItalic.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/font/Montserrat-Italic.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/font/Montserrat-Medium.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/font/Montserrat-Regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/font/Montserrat-LightItalic.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/font/Montserrat-ThinItalic.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/font/Montserrat-SemiBold.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/font/Montserrat-SemiBoldItalic.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/font/Montserrat-MediumItalic.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/font/Montserrat-Thin.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/font/Montserrat-Light.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/font/Montserrat-ExtraLightItalic.woff2" as="font" type="font/woff2" crossorigin>
</head>
<body>