<?php

function __($key, $lang = 'it')
{
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $acceptLang = ['fr', 'it', 'en'];
    $lang = in_array($lang, $acceptLang) ? $lang : 'en';
    if (isset(WEBSITE_TEXTS[$lang][$key])) {
        return WEBSITE_TEXTS[$lang][$key];
    } else {
        return $key . " missing translation";
    }
}

function getArticleFoto($article)
{
    global $pdo;
    $article_id = $article["id"];
    $array_return = [
        "img" => null,
        "alt" => null
    ];
    $sth = $pdo->prepare("SELECT * FROM article_photo WHERE article_id = $article_id ORDER BY ord LIMIT 1");
    $sth->execute();
    $article_photo = $sth->fetch(\PDO::FETCH_ASSOC);
    if ($article_photo && is_array($article_photo)) {
        $array_return['img'] = $article_photo['img'];
        $array_return['alt'] = $article_photo['alt'];
    }
    return $array_return;
}

function getArticleGallery($article)
{
    global $pdo;
    $article_id = $article["id"];
    $sth = $pdo->prepare("SELECT * FROM article_photo WHERE article_id = $article_id ORDER BY ord");
    $sth->execute();
    $article_gallery = $sth->fetchAll(\PDO::FETCH_ASSOC);
    return $article_gallery;
}
