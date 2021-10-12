<!doctype html>
<html lang="en">

<?php require 'partials/head.php'?>

<body>

    <?php require 'partials/header.php'?>

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

    <main>
        <h1>
            Pagina non disponibile in questo momento
        </h1>
        <p>per tornare al home page <a href="/index.php">clicca qui</a></p>
    </main>
    <footer class="mt-5 bg-primary position-fixed bottom-0" style="width: 100vw;">
        <div class="container p-5">
            <a class="d-block m-auto text-white text-decoration-none h3" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="30" viewBox="0 0 37.088 43.349">
                    <g id="logo_Alias" data-name="logo Alias" transform="translate(0 0)">
                        <path id="Tracciato_3" data-name="Tracciato 3"
                            d="M138.576,342.453a.672.672,0,0,0-.192.471v5.995h0L132.395,355a.672.672,0,0,0-.192.471v5.995l-5.989,6.077a.673.673,0,0,0-.192.471v5.719a.672.672,0,0,0,.192.471l2.9,2.941,2.625,2.664a.651.651,0,0,0,.93,0l2.625-2.664L138.383,374l3.091,3.137,2.625,2.664a.651.651,0,0,0,.929,0l2.626-2.664L150.746,374l3.091,3.137,2.625,2.664a.651.651,0,0,0,.929,0l2.625-2.664,2.9-2.941a.672.672,0,0,0,.193-.471V368.01a.673.673,0,0,0-.193-.471l-5.989-6.077v-5.995a.672.672,0,0,0-.193-.471l-5.989-6.077v-5.995a.672.672,0,0,0-.193-.471l-5.524-5.605a.65.65,0,0,0-.929,0Z"
                            transform="translate(-126.021 -336.652)" fill="#fff"></path>
                    </g>
                </svg>
                Alias
            </a>
            <p class="text-white mt-3">
                Nullam quis risus eget urna mollis ornare vel eu leo. Praesent commodo cursus magna, vel scelerisque
                nisl consectetur et. Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo
                luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque
                ornare sem lacinia quam venenatis vestibulum.
            </p>
            <hr class="bg-white">
            <!-- ShareThis BEGIN -->
            <div class="mt-5 sharethis-inline-share-buttons"></div><!-- ShareThis END -->
        </div>
    </footer>
    <?php require 'partials/script.php'?>
</body>

</html>