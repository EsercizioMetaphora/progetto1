<?php
error_reporting(-1);

/* Navigation Menu */

$sth = $pdo->prepare("SELECT * FROM navigation_menu ORDER BY ord");
$sth->execute();

$menu = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('WEBSITE_MENU', $menu);


/* Footer 1 */

$sth = $pdo->prepare("SELECT * FROM footer_1 ORDER BY ord");
$sth->execute();

$footer_1 = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('WEBSITE_FOOTER_1', $footer_1);

/* Footer 2 */

$sth = $pdo->prepare("SELECT * FROM footer_2 ORDER BY ord");
$sth->execute();

$footer_2 = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('WEBSITE_FOOTER_2', $footer_2);

/* News */

$sth = $pdo->prepare("SELECT * FROM news");
$sth->execute();

$news = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('NEWS', $news);


/* Socials */

$sth = $pdo->prepare("SELECT * FROM social_networks ORDER BY ord");
$sth->execute();

$social_links = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('SOCIALS', $social_links);

/* Partners */

$sth = $pdo->prepare("SELECT * FROM partners ORDER BY ord");
$sth->execute();

$partners = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('PARTNERS', $partners);

/* Categories */

$sth = $pdo->prepare("SELECT * FROM categories");
$sth->execute();

$categories = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('CATEGORIES', $categories);





