<?php
function ChosenCategory($post_category){
    global $pdo;
    $post_argument = $post_category['id'];
    $sth = $pdo->prepare("SELECT * FROM post_categories ORDER BY id");
    $sth->execute();
    $post_argument = $sth->fetchAll(\PDO::FETCH_ASSOC);
    return $post_argument;
}
