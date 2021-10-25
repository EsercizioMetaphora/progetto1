<?php
error_reporting(-1);

/* Language_Text */

$website_texts = [
    'it' => [
        'readmore' => 'Read More',
        'title' => 'Corso Metaphora italiano',
        'text_h1' => 'questo è il testo dell\' h1',
        'intro' => 'Questa è l\'introduzione',
    ],
    'en' => [
        'readmore' => 'Read More',
        'title' => 'Metaphora, ma con accento inglese',
        'text_h1' => 'Questo è il testo dell\' h1, anche se è un h4, non vedi quanto è in inglese?',
        'intro' => 'Questa è l\'introduzione, ma con l\'ombrello e il monocolo',
    ]
];
define('WEBSITE_TEXTS', $website_texts);

/* Navigation Menu */

$sth = $pdo->prepare("SELECT * FROM navigation_menu ORDER BY ord");
$sth->execute();

$menu = $sth->fetchAll(\PDO::FETCH_ASSOC);

/* Carousel */

define('WEBSITE_MENU', $menu);

$sth = $pdo->prepare("SELECT * FROM carousel WHERE active=1 ORDER BY ord");
$sth->execute();

$carousel_home = $sth->fetchAll(\PDO::FETCH_ASSOC);

/* News */

$sth = $pdo->prepare("SELECT * FROM news");
$sth->execute();

$news = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('NEWS', $news);


/* Article List */ 

$sth = $pdo->prepare("SELECT * FROM article");
$sth->execute();

$articles = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('ARTICLES', $articles);

/* Article List join Article Photos  */

if(isset($_GET['article_id'])){
    $article_id = $_GET['article_id'];
    $sth = $pdo->prepare("SELECT * FROM article WHERE id = $article_id");
    $sth->execute();

    $article_detail = $sth->fetch(\PDO::FETCH_ASSOC);

    define('ARTICLEDETAIL', $article_detail);

    $sth = $pdo->prepare("SELECT * FROM article_photo WHERE article_id = $article_id");
    $sth->execute();

    $article_photos = $sth->fetchAll(\PDO::FETCH_ASSOC);

};
