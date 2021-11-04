<?php
error_reporting(-1);

/* Navigation Menu */

$sth = $pdo->prepare("SELECT * FROM navigation_menu ORDER BY ord");
$sth->execute();

$menu_item = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('WEBSITE_MENU', $menu_item);

/* Hero Area */

$sth = $pdo->prepare("SELECT * FROM articles ORDER BY ord");
$sth->execute();

$hero_item = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('HEROES', $hero_item);

/* Categories */

$sth = $pdo->prepare("SELECT * FROM categories");
$sth->execute();

$categorie_item = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('CATEGORIES', $categorie_item);

/* Recent Articles */

$sth = $pdo->prepare("SELECT * FROM articles ORDER BY id");
$sth->execute();

$recent_item = $sth->fetchAll(\PDO::FETCH_ASSOC);

$get_q='';

if (isset($_GET['q'])) {
    $get_q=($_GET['q']);
    $sth = $pdo->prepare("SELECT * FROM articles WHERE title like '%$get_q%' OR author like '%$get_q%' OR `description` like '%$get_q%' ORDER BY id");
} else {
    $sth = $pdo->prepare("SELECT * FROM articles ORDER BY id");
}
$sth->execute();
$recent_item = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('RECENTS', $recent_item);

/* News */

$sth = $pdo->prepare("SELECT * FROM news ORDER BY ord");
$sth->execute();

$news_item = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('NEWS', $news_item);

/* Socials */

$sth = $pdo->prepare("SELECT * FROM socials ORDER BY ord");
$sth->execute();

$social_item = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('SOCIALS', $social_item);

/* Partners */

$sth = $pdo->prepare("SELECT * FROM partners ORDER BY ord");
$sth->execute();

$partner_item = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('PARTNERS', $partner_item);

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


/* Slug Articles */

if (isset($_GET['slug'])) {
    $slug = $_GET['slug'];
    $sth = $pdo->prepare("SELECT * FROM articles WHERE `slug` = '$slug' LIMIT 1");
    $sth->execute();
    $article_slug = $sth->fetch(\PDO::FETCH_ASSOC);
}