<?php
error_reporting(-1);

//---------------------------------------------------------
//altri testi
//---------------------------------------------------------

function _ot($source)
{
    global $pdo;
    $sth = $pdo->prepare("SELECT * FROM other_texts WHERE source = '$source' LIMIT 1");
    $sth->execute();
    $other_texts = $sth->fetch(\PDO::FETCH_ASSOC);
    if (is_array($other_texts)) {
        return $other_texts['target'];
    } else {
        return $source;
    }
}


//---------------------------------------------------------
//traduttore
//---------------------------------------------------------

$lang = 'it';
if (count($_GET) > 0) {
    if (array_key_exists('lang', $_GET)) {
        $lang = $_GET['lang'];
    }
}

function __($source)
{
    global $pdo;
    global $lang;
    $sth = $pdo->prepare("SELECT * FROM translation WHERE source = '$source' LIMIT 1");
    $sth->execute();
    $translation = $sth->fetch(\PDO::FETCH_ASSOC);
    if (array_key_exists($lang, $translation)) {
        return $translation[$lang];
    } else {
        return $source;
    }
}

//---------------------------------------------------------
// navbar
//---------------------------------------------------------

function navbar($parent = 'root')
{
    global $pdo;

    $sth = $pdo->prepare("SELECT * FROM navbar WHERE parent = '$parent' AND active = 1 ORDER BY ord");
    $sth->execute();

    $navbar_selection = $sth->fetchAll(\PDO::FETCH_ASSOC);

    return $navbar_selection;
}

//---------------------------------------------------------
// cta
//---------------------------------------------------------

function _cta($cta_source, $cta_type = "target_it")
{
    global $pdo;
    global $cta;
    $sth = $pdo->prepare("SELECT * FROM call_to_action WHERE cta_source = '$cta_source' LIMIT 1");
    $sth->execute();
    $callToAction = $sth->fetch(\PDO::FETCH_ASSOC);
    if (is_array($callToAction)) {
        $type = "cta_" . $cta_type;
        return $callToAction[$type];
    } else {
        return "not found";
    }
}

//---------------------------------------------------------
//immagini
//---------------------------------------------------------

function i($img_source, $attr = 'src')
{
    global $pdo;
    $sth = $pdo->prepare("SELECT * FROM images WHERE active = 1 AND img_source = '$img_source' LIMIT 1");
    $sth->execute();
    $target = $sth->fetch(\PDO::FETCH_ASSOC);
    if (is_array($target)) {

        if ($attr == 'src') {
            return $target['img_target'];
        }
        if ($attr == 'srcset') {
            return $target['img_srcset'];
        }

        if ($attr == 'alt') {
            return $target['img_alt'];
        }

        if ($attr == 'href') {
            return $target['img_href'];
        }
    } else {
        return $img_source;
    }
}

//---------------------------------------------------------
// footer
//---------------------------------------------------------

$sth = $pdo->prepare("SELECT * FROM footer WHERE active = 1 ORDER BY ord");
$sth->execute();

$footer = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('FOOTER', $footer);

//---------------------------------------------------------
// carousel
//---------------------------------------------------------

$sth = $pdo->prepare("SELECT * FROM carousel WHERE active = 1 ORDER BY ord");
$sth->execute();

$carousel = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('CAROUSEL', $carousel);


//---------------------------------------------------------
// staff
//---------------------------------------------------------

$sth = $pdo->prepare("SELECT * FROM staff WHERE active = 1 ORDER BY ord");
$sth->execute();

$staff = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('STAFF', $staff);

//---------------------------------------------------------
// testimonials
//---------------------------------------------------------

$sth = $pdo->prepare("SELECT * FROM testimonials WHERE active = 1 ORDER BY ord");
$sth->execute();

$testimonial = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('TESTIMONIAL', $testimonial);


//---------------------------------------------------------
//attività - cards 
//---------------------------------------------------------

$sth = $pdo->prepare("SELECT * FROM activities WHERE active = 1 ORDER BY ord");
$sth->execute();

$activities = $sth->fetchAll(\PDO::FETCH_ASSOC);

define('ACTIVITIES', $activities);

//selettore attività--------------------------------------

function get_activities($only_news = false)
{
    global $pdo;

    $news_condition = "";

    if ($only_news) {
        $news_condition = "AND news = 1";
    }

    $sth = $pdo->prepare("SELECT * FROM activities WHERE active = 1 " . $news_condition . " ORDER BY ord");
    $sth->execute();

    $activities = $sth->fetchAll(\PDO::FETCH_ASSOC);

    return $activities;
}
