<?php
/* NAVBAR START */
$sth = $pdo->prepare("SELECT * FROM navigation_menu ORDER BY ord");
$sth->execute();

$menu = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('WEBSITE_MENU', $menu);

/* NAVBAR END */

/* CATEGORY START */

$sth = $pdo->prepare("SELECT * FROM categories ORDER BY ord");
$sth->execute();

$cat_list = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('CATEGORIES', $cat_list);

/* CATEGORY END */

/* RECENT ARTICLES START */

$sth = $pdo->prepare("SELECT * FROM article ");
$sth->execute();

$art_list = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('ARTICLES', $art_list);

/* RECENT ARTICLES END */

/* HEROES START */

$sth = $pdo->prepare("SELECT * FROM article WHERE slide_view");
$sth->execute();

$hero_list = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('HEROES', $hero_list);

/* HEROES END */

/* FOOTER NAV 1 */

$sth = $pdo->prepare("SELECT * FROM footer_nav");
$sth->execute();

$f_nav_1 = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('FNAV1', $f_nav_1);

/* end footer nav */

/* FOOTER NAV 2 */

$sth = $pdo->prepare("SELECT * FROM footer_nav2");
$sth->execute();

$f_nav_2 = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('FNAV2', $f_nav_2);

/* end footer nav */

/* FOOTER NAV 2 */

$sth = $pdo->prepare("SELECT * FROM partners");
$sth->execute();

$partner = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('PARTNER', $partner);

/* end footer nav */