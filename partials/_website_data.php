<?php

/* ACTIVITIES */

$sth = $pdo->prepare("SELECT * FROM activities");
$sth->execute();

$activity_list = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('ACTIVITIES', $activity_list);

/* FINE ACTIVITIES*/

/* STAFF*/

$sth = $pdo->prepare("SELECT * FROM staff");
$sth->execute();

$staff_list = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('STAFF', $staff_list);

/* FINE STAFF */

/* MENU */

$sth = $pdo->prepare("SELECT * FROM menu");
$sth->execute();

$menu_list = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('MENU', $menu_list);

/* FINE MENU */

/* IMMAGINI PIZZA */

$sth = $pdo->prepare("SELECT * FROM pizza_imgs");
$sth->execute();

$img_list = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('IMG', $img_list);

/* FINE IMMAGINI PIZZA  */


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