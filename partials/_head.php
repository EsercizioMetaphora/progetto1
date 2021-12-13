<!doctype html>
<html lang="en">
<?php require 'partials/_db_connection.php'?>
<?php require 'partials/_website_data.php'?>
<?php require 'partials/_functions.php'?>

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Prova di metaphora con Qaulcosa di Seo"/>

    <!-- CSS -->
	<link rel="stylesheet" href="/assets/css/style.css">
    
	<title>
        <?php foreach (ABOUT as $info) : ?>
            <?php echo $info["title"] ?>
        <?php endforeach ?>
    </title>
</head>

<body>
    <?php require 'partials/_header.php'?>