<?php
error_reporting(-1);

$website_texts = [
    'it' => [
        'readmore' => 'Read More',
        'title' => 'Corso Metaphora italiano',
        'text_h1' => 'questo è il testo dell\' h1',
        'intro' => 'Questa è l\'introduzione',
    ],
    'en' => [
        'readmore' => 'Read More',
        'title' => 'Metaphora inglese',
        'text_h1' => 'Questo è il  dell\' h1',
    ]
];
define('WEBSITE_TEXTS', $website_texts);


$sth = $pdo->prepare("SELECT * FROM navigation_menu ORDER BY ordine");
$sth->execute();

$menu = $sth->fetchAll(\PDO::FETCH_ASSOC);

/*
$menu = [
    ["titolo" => "Home", "url" => "index.php"],
    ["titolo" => "List", "url" => "list.php"],
    ["titolo" => "Details", "url" => "details.php"]
];*/

define('WEBSITE_MENU', $menu);


$sth = $pdo->prepare("SELECT * FROM carousel WHERE attivo=1 ORDER BY ordine");
$sth->execute();

$carousel_home = $sth->fetchAll(\PDO::FETCH_ASSOC);


/*$carousel_home = [
    ['src' => 'images/static_assets/IMG_4139.JPG', 'alt' => 'Immagine 1'],
    ['src' => 'images/static_assets/IMG_4140.JPG', 'alt' => 'Immagine 2'],
    ['src' => 'images/static_assets/IMG_4155.JPG', 'alt' => 'Immagine 3'],
    ['src' => 'images/static_assets/IMG_4170.JPG', 'alt' => 'Immagine 4']
];*/

$sth = $pdo->prepare("SELECT * FROM news");
$sth->execute();

$news = $sth->fetchAll(\PDO::FETCH_ASSOC);

/*$news = [
    ['immagine' => '/images/immagini/IMG_4155.jpg', 'alt' => 'Immagine1', 'titolo' => 'Titolo1', 'testo' => 'Testo1', 'data' => 'Data1'],
    ['immagine' => '/images/immagini/IMG_4155a.jpg', 'alt' => 'Immagine2', 'titolo' => 'Titolo2', 'testo' => 'Testo2', 'data' => 'Data2'],
    ['immagine' => '/images/immagini/IMG_4155.jpg', 'alt' => 'Immagine3', 'titolo' => 'Titolo3', 'testo' => 'Testo3', 'data' => 'Data3'],
    ['immagine' => '/images/immagini/IMG_4155a.jpg', 'alt' => 'Immagine4', 'titolo' => 'Titolo4', 'testo' => 'Testo4', 'data' => 'Data4']
];*/

define('NEWS', $news);

$sth = $pdo->prepare("SELECT * FROM articles");
$sth->execute();

$articles = $sth->fetchAll(\PDO::FETCH_ASSOC);

/*$articles = [
    ['immagine' => '/images/immagini/IMG_4175.jpg', 'alt' => 'Immagine1', 'titolo' => 'Titolo1', 'testo' => 'Testo1'],
    ['immagine' => '/images/immagini/IMG_4175.jpg', 'alt' => 'Immagine2', 'titolo' => 'Titolo2', 'testo' => 'Testo2'],
    ['immagine' => '/images/immagini/IMG_4175.jpg', 'alt' => 'Immagine3', 'titolo' => 'Titolo3', 'testo' => 'Testo3'],
    ['immagine' => '/images/immagini/IMG_4175.jpg', 'alt' => 'Immagine4', 'titolo' => 'Titolo4', 'testo' => 'Testo4'],
];*/

define('ARTICLES', $articles);
