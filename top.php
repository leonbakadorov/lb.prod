<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengraphprotocol.org/schema/" xml:lang="ru" lang="ru" env="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">


    <?

    $title = 'Leon Bakadorov LB (UX, CX, BX) — Официальный сайт';
    $description = 'Прорывные и перспективные идеи для значимых и долгосрочных результатов. Опыт более 8 лет и 150 проектов. Эксклюзивная разработка сайтов, брендов, продуктов; проектирование интерфейсов (UX/UI Design)';
    $social_image = "/social/leonbakadorov.jpg";

    ?>

    <title><?=$title?></title>

    <meta name="description" content="<?=$description;?>">
    <meta name="twitter:image" content="<?=$social_image;?>">
    <meta name="twitter:title" content="<?=$title;?>">
    <meta property="og:description" content="<?=$description;?>">
    <meta property="og:url" content="">
    <meta property="og:title" content="<?=$title;?>">
    <meta property="og:image" content="<?=$social_image;?>">


    <? include 'meta-link.php'; ?>

    <? include 'css/style.php'; ?>
    <style>
        .animateOpacity{
            opacity: 0;
            transition: opacity 350ms ease;
        }
        .animateOpacity.active{
            opacity: 1;
        }
        @media (max-width: 1065px) {
            .animateOpacity{
                transition: opacity 150ms ease;
            }
        }
    </style>
 
</head>
<body>
<? include 'part/nav-2.php'; ?>