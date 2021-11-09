<?php
/* NAVBAR */
/* $sth = $pdo->prepare("SELECT * FROM navigation_menu ORDER BY ord");
$sth->execute();

$menu = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('WEBSITE_MENU', $menu);
 */
/* NAVBAR END */

/* CAROSELLO CORSI */

$sth = $pdo->prepare("SELECT * FROM corsi");
$sth->execute();

$course_list = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('COURSES', $course_list);

/* FINE CAROSELLO CORSI */

/* PERSONAL TRAINER */

$sth = $pdo->prepare("SELECT * FROM personal_trainer");
$sth->execute();

$trainer_list = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('TRAINER', $trainer_list);

/* FINE PERSONAL TRAINER */

/* ABBONAMENTI */

$sth = $pdo->prepare("SELECT * FROM abbonamenti");
$sth->execute();

$abb_list = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('ABBONAMENTI', $abb_list);

/* FINE ABBONAMENTI */


/* CATEGORY END */

/* SLUG THING */
/* 
if (isset($_GET['slug'])) {
    $slug = $_GET['slug'];
    $sth = $pdo->prepare("SELECT * FROM article WHERE `slug` = '$slug' LIMIT 1");
    $sth->execute();
    $article_slug = $sth->fetch(\PDO::FETCH_ASSOC);
}
 */
/* END SLUG */