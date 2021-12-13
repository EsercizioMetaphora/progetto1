<!-- Translations -->

<?php

function __($source, $lang = 'it')
{
    global $pdo;
    $sth = $pdo->prepare("SELECT * FROM translations WHERE source='$source' AND lang='$lang' LIMIT 1");
    $sth->execute();
    $traduzione = $sth->fetch(\PDO::FETCH_ASSOC);
    if (is_array($traduzione)) {
        return $traduzione['target'];
    } else {
        return $source;
    }
}

?>