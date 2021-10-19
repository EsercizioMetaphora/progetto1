<!doctype html>
<html lang="en">
<?php require '_db_connection.php'?>
<?php require '_website_data.php'?>
<?php require '_functions.php'?>

<?php require 'head.php'?>

<body>

    <?php require 'header.php'?>

    <div class="container" id="login_container">
        <div class="row">
            <form>
                <h2>Login</h2>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Inserisci la tua email">
                </div>
                <div class="form-group password-input">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Inserisci la tua password">
                </div>
                <button type="submit" class="btn btn-dark">Login</button>
                <button class="btn btn-secondary" id="cancel-btn">Annulla</button>
            </form>
        </div>

    </div>