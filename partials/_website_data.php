<?php
/* NAVBAR */
/* $sth = $pdo->prepare("SELECT * FROM navigation_menu ORDER BY ord");
$sth->execute();

$menu = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('WEBSITE_MENU', $menu);
 */
/* NAVBAR END */

/* CAROSELLO CORSI */

$sth = $pdo->prepare("SELECT * FROM activities");
$sth->execute();

$activity_list = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('ACTIVITIES', $activity_list);

/* FINE CAROSELLO CORSI */

/* PERSONAL TRAINER */

$sth = $pdo->prepare("SELECT * FROM staff");
$sth->execute();

$staff_list = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('STAFF', $staff_list);

/* FINE PERSONAL TRAINER */

/* ABBONAMENTI */

$sth = $pdo->prepare("SELECT * FROM menu");
$sth->execute();

$menu_list = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('MENU', $menu_list);

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