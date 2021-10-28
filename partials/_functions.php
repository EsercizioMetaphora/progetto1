<?php

/* RECUPERO FOTO DA article_photo PER SCHIAFFARLA NEGLI ARTICOLI */

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
