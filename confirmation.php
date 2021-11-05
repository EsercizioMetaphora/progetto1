<?php require('partials/db_connection.php');

if (is_array($_POST['newsletter'])) {
    $newsletter = $_POST['newsletter'];
    $nome = $newsletter['name'];
    $email = $newsletter['email'];

    $sth = $pdo->prepare("SELECT * FROM accounts WHERE email = '$email' LIMIT 1");
    $sth->execute();
    $account = $sth->fetch(\PDO::FETCH_ASSOC);

    if (is_Array($account)) {

        $messaggio = "L'utente risulta già registrato.";
        header("location: /confirmation/already_registered");
    } else {

        $sth = $pdo->prepare("INSERT INTO accounts (`nome`,`email`) VALUES ('$nome','$email');");
        $sth->execute();
        $messaggio = "Grazie $nome! Ti sei iscritto con successo a Bunzo!";
        header("location: /confirmation/success");
    }
}
if (isset($_GET['esito'])) {
    if ($_GET['esito'] == "success") {
        $messaggio = "Grazie! Ti sei iscritto con successo a Bunzo!";
    } else {
        $messaggio = "L'utente risulta già registrato.";
    }
} else {

    $messaggio = "La pagina non esiste";
}
?>

<?php require('partials/website_data.php') ?>
<?php require('partials/functions.php') ?>


<!DOCTYPE html>
<html class="no-js" lang="zxx">

<?php require('partials/head.php') ?>

<body class="theme-color-three">

    <?php require('partials/header.php') ?>

    <div id="main-wrapper">
        <div class="site-wrapper-reveal">

            <h1><?php echo $messaggio ?></h1>

            <?php require('partials/footer.php') ?>

            <?php require('partials/script.php') ?>


</body>