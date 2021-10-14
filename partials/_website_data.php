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
        'title' => 'Metaphora, ma con accento inglese',
        'text_h1' => 'Questo è il testo dell\' h1, anche se è un h4, non vedi quanto è in inglese?',
        'intro' => 'Questa è l\'introduzione, ma con l\'ombrello e il monocolo',
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

$sth = $pdo->prepare("SELECT * FROM carousel WHERE active=1 ORDER BY ordine");
$sth->execute();

$carousel_home = $sth->fetchAll(\PDO::FETCH_ASSOC);

/*
$carousel_home = [
    ['src' => 'images/static_assets/IMG_4139.JPG', 'alt' => 'Immagine 1'],
    ['src' => 'images/static_assets/IMG_4140.JPG', 'alt' => 'Immagine 2'],
    ['src' => 'images/static_assets/IMG_4155.JPG', 'alt' => 'Immagine 3'],
    ['src' => 'images/static_assets/IMG_4170.JPG', 'alt' => 'Immagine 4']
];
*/
/*
$news = [
    ['immagine' => '/images/immagini/IMG_4155a.jpg', 'alt' => 'Immagine1', 'titolo' => 'Titolo 1', 'testo' => 'Testo 1 eccetera', 'data' => 'Data1'],
    ['immagine' => '/images/immagini/IMG_4155.jpg', 'alt' => 'Immagine2', 'titolo' => 'Titolo 2', 'testo' => 'Testo 2 eccetera', 'data' => 'Data2'],
    ['immagine' => '/images/immagini/IMG_4155a.jpg', 'alt' => 'Immagine1', 'titolo' => 'Titolo 3', 'testo' => 'Testo 3 eccetera', 'data' => 'Data3'],
    ['immagine' => '/images/immagini/IMG_4155a.jpg', 'alt' => 'Immagine1', 'titolo' => 'Titolo 4', 'testo' => 'Testo 4 eccetera', 'data' => 'Data4']
];
*/
$sth = $pdo->prepare("SELECT * FROM news");
$sth->execute();

$news = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('NEWS', $news);

/*
$articles = [
    ['immagine' => '/images/immagini/IMG_4175.jpg', 'alt' => 'Immagine1', 'titolo' => 'Titolo 1', 'testo' => 'Testo 1 eccetera'],
    ['immagine' => '/images/immagini/IMG_4175.jpg', 'alt' => 'Immagine2', 'titolo' => 'Titolo 2', 'testo' => 'Testo 2 eccetera'],
    ['immagine' => '/images/immagini/IMG_4175.jpg', 'alt' => 'Immagine3', 'titolo' => 'Titolo 3', 'testo' => 'Testo 3 eccetera'],
    ['immagine' => '/images/immagini/IMG_4175.jpg', 'alt' => 'Immagine4', 'titolo' => 'Titolo 4', 'testo' => 'Testo 4 eccetera'],
];
*/
$sth = $pdo->prepare("SELECT * FROM articles");
$sth->execute();

$articles = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('ARTICLES', $articles);
