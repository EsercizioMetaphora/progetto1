<?php
error_reporting(-1);

//---------------------------------------------------------
//traduttore
//---------------------------------------------------------

function __($source, $lang = 'it')
{
    global $pdo;
    global $lang_set;
    $sth = $pdo->prepare("SELECT * FROM translation WHERE lang = '$lang' AND source = '$source' LIMIT 1");
    $sth->execute();
    $translation = $sth->fetch(\PDO::FETCH_ASSOC);
    if (is_array($translation)) {
        return $translation['target'];
    } else {
        return $source;
    }
}


//header---------------------------------------------------

$sth = $pdo->prepare("SELECT * FROM navbar ORDER BY ord LIMIT 5");
$sth->execute();

$navbar = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('NAVBAR', $navbar);

//activities---------------------------------------------------

$sth = $pdo->prepare("SELECT * FROM activities ORDER BY ord ");
$sth->execute();

$activities = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('ACTIVITIES', $activities);