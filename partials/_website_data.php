<?php
error_reporting(-1);

//header--------------------//

$sth = $pdo->prepare("SELECT * FROM menu_header ORDER BY ord");
$sth->execute();

$menu_header = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('MENU_HEADER', $menu_header);



//slide show--------------------//

$sth = $pdo->prepare("SELECT * FROM slide_show ORDER BY ord");
$sth->execute();

$slide_show = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('SLIDE_SHOW', $slide_show);



//categoria 1--------------------//

$sth = $pdo->prepare("SELECT * FROM category WHERE step = 1");
$sth->execute();

$category_1 = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('CATEGORY_1', $category_1);

//categoria 2--------------------//

$sth = $pdo->prepare("SELECT * FROM category WHERE step = 2");
$sth->execute();

$category_2 = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('CATEGORY_2', $category_2);

//categoria 3--------------------//

$sth = $pdo->prepare("SELECT * FROM category WHERE step = 3");
$sth->execute();

$category_3 = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('CATEGORY_3', $category_3);



//--------------------//

/*

*/
$sth = $pdo->prepare("SELECT * FROM post ORDER BY date_day");
$sth->execute();

$post = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('POST', $post);