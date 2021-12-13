<?php
/*
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
*/