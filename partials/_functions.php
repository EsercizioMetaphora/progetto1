<?php

/* RECUPERO autori PER SCHIAFFARLA NEGLI ARTICOLI */

function getSocial($personal_trainer_id)
{
    global $pdo;
    $sth = $pdo->prepare("SELECT * FROM `social` WHERE personal_trainer_id = $personal_trainer_id");
    $sth->execute();
    $social_tr = $sth->fetchAll(\PDO::FETCH_ASSOC);
    if ($social_tr) {
        return $social_tr;
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