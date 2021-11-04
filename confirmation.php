<?php
	require 'partials/_db_connection.php';
	if (is_array($_POST['newsletter'])) {
		$newsletter = $_POST['newsletter'];
		$nome = $newsletter['name'];
		$email = $newsletter['email'];
		$sth = $pdo->prepare("SELECT * FROM accounts WHERE email = '$email' LIMIT 1");
		$sth->execute();
		$account = $sth->fetch(\PDO::FETCH_ASSOC);
		if (is_Array($account))
		{
			$messaggio = "L'utente risulta già registrato.";
			header("location: /confirmation.php?success=0&messaggio=$messaggio");
		}
		else
		{
			$sth = $pdo->prepare("INSERT INTO accounts (`nome`,`email`) VALUES ('$nome','$email');");
			$sth->execute();
			$messaggio = "Grazie $nome! Ti sei iscritto con successo a Bunzo!";
			header("location: /confirmation.php?success=1&messaggio=$messaggio");
		}
	}
	
?>

<!doctype html>
<html lang="en">

<?php require 'partials/_website_data.php'?>
<?php require 'partials/_functions.php'?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bunzo SRL</title>
    <meta name="description" content="Bunzo is one of the most popular blog  ">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="#" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Bunzo - Blog HTML Template" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.png">

    <!-- CSS
        ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

    <!-- Gordita Fonts CSS -->
    <link rel="stylesheet" href="assets/fonts/gordita-fonts.css" />

    <!-- Icofont CSS -->
    <link rel="stylesheet" href="assets/css/vendor/icofont.min.css" />

    <!-- Light gallery CSS -->
    <link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css">

    <!-- Swiper bundle CSS -->
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />

    <!-- AOS CSS -->
    <link rel="stylesheet" href="assets/css/plugins/aos.css">


    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->

    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
        <link rel="stylesheet" href="assets/css/plugins/plugins.min.css"> -->

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="theme-color-three">
    <?php 
		require('partials/_header.php');
	?>
	<h1><?php echo $_GET['messaggio']?></h1>
</body>