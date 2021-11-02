<?php

/* RECUPERO autori PER SCHIAFFARLA NEGLI ARTICOLI */

function getAutor($autor_id)
{
    global $pdo;
    $sth = $pdo->prepare("SELECT * FROM `article_autor` WHERE id = $autor_id");
    $sth->execute();
    $article_autor = $sth->fetchAll(\PDO::FETCH_ASSOC);
    if ($article_autor) {
        return $article_autor[0];
    } else {
        return false;
    }
}

function __($str, $lang = 'it')
{
    global $pdo;
    $sth = $pdo->prepare("SELECT * FROM `translation` WHERE `source` = '$str' AND `language` = '$lang' LIMIT 1");
    $sth->execute();
    $traduzione = $sth->fetch(\PDO::FETCH_ASSOC);
    if (is_array($traduzione)) {
        return $traduzione['target'];
    } else {
        return $str;
    }
}
