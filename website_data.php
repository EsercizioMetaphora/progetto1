<?php 
$sth = $pdo->prepare("SELECT * FROM post_categories ORDER BY id");
$sth->execute();
$post_category = $sth->fetchAll(\PDO::FETCH_ASSOC);

if (isset($_GET['q'])) {
    $get_q=$_GET['q'];
    $sth = $pdo->prepare("SELECT * FROM post WHERE title like '%$get_q%' OR author like '%$get_q%' OR `text` like '%$get_q%' ORDER BY id");
} else {
    $sth = $pdo->prepare("SELECT * FROM post ORDER BY id");
}
$sth->execute();
$post = $sth->fetchAll(\PDO::FETCH_ASSOC);
define('POST', $post);


$sth = $pdo->prepare("SELECT * FROM news_week ORDER BY id");
$sth->execute();
$news_week = $sth->fetchAll(\PDO::FETCH_ASSOC);

define ('NEWS_WEEK', $news_week);

$sth = $pdo->prepare("SELECT * FROM slideshow ORDER BY id");
$sth->execute();
$slideshow = $sth->fetchAll(\PDO::FETCH_ASSOC);
define('SLIDESHOW', $slideshow);

$sth = $pdo->prepare("SELECT * FROM partners ORDER BY id");
$sth->execute();
$partners = $sth->fetchAll(\PDO::FETCH_ASSOC);
define('PARTNERS', $partners);
