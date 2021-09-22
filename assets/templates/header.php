<?php
    include_once("assets/helpers/url.php");
    include_once("assets/data/categories.php");
    include_once("assets/data/posts.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= $BASE_URL ?>assets/CSS/layout.css">
        <link rel="shortcut icon" href="assets/img/logo.ico" type="image/x-icon">
        <title>DevBlog</title>
    </head>
    <body>
        <header>
            <a href="<?= $BASE_URL ?>">
                <img src="assets/img/logo.svg" alt="Logo" id="logo">
            </a>
            <nav>
                <ul>
                    <li><a href="<?= $BASE_URL ?>">Home</a></li>
                    <li><a href="#">Categorias</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="<?= $BASE_URL ?>contato.php">Contato</a></li>
                </ul>
            </nav>
        </header>