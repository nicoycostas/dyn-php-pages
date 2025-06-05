<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (!isset($pageTitle)): echo "Dynamic Title"; else: echo $pageTitle; endif;  ?> 
    
    
    </title>
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/about.css">
     <link rel="stylesheet" href="assets/css/contact.css">
</head>
<body>
    <header class="header" style="background: linear-gradient(0deg, rgba(4, 4, 4, 0.35),rgba(53, 53, 53, 0.18)), url(<?php 
    //if (isset($imgPath)): echo $imgPath; else: echo "assets/imgs/coding-4.jpg"; endif;
    echo $imgPath = isset($imgPath) ? $imgPath : "assets/imgs/coding-4.jpg";
    ?>);background-size:cover;background-position:center;">
        <h1>PHP Dynamic Pages Showcase</h1>
        <h2><?php echo $pageTitle= isset($pageTitle)? $pageTitle : "Dynamic Title"; ?></h2>
        <nav class="menu">
            <ul>
                <li class="menu-item "><a class="menu-link <?php if (!empty($key) && $key=="homepage"):echo "active"; endif; ?>" href="index.php">Home</a></li>
                <li class="menu-item"><a class="menu-link <?php if (!empty($key) && $key=="about"):echo "active"; endif; ?>"" href="about.php">About</a></li>
                <li class="menu-item"><a class="menu-link <?php if (!empty($key) && $key=="contact"): echo "active"; endif; ?>"" href="contact.php">Contact</a></li>
                <li class="menu-item"><a class="menu-link <?php if (!empty($key) && $key=="test"): echo "active"; endif; ?>"" href="test.php">Test</a></li>
            </ul>
        </nav>

    </header>
    
    <main>