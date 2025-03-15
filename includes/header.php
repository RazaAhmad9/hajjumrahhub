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
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/global.css" type="text/css">
    <link rel="stylesheet" href="css/navbar.css" type="text/css">
    <link rel="stylesheet" href="css/home.css" type="text/css">
</head>
<body>