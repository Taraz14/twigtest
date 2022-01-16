<?php

require_once('vendor/autoload.php');

$loader = new \Twig\Loader\FilesystemLoader('view');
$twig = new \Twig\Environment($loader);

$price = file_get_contents('http://localhost/docker/price.json');
$price_decode = json_decode($price, TRUE);

$pattern = '/([\d,]+\.)(\d+)(.*)$/';

//last price
$harga_lama = [
    'bayi_last' => $price_decode['bayi']['last-price'],
    'pelajar_last' => $price_decode['pelajar']['last-price'],
    'personal_last' => $price_decode['personal']['last-price'],
    'bisnis_last' => $price_decode['bisnis']['last-price']
];

//new price
$harga_baru = [
    'bayi_new' => $price_decode['bayi']['new-price'],
    'pelajar_new' => $price_decode['pelajar']['new-price'],
    'personal_new' => $price_decode['personal']['new-price'],
    'bisnis_new' => $price_decode['bisnis']['new-price']

];

$format[] = preg_replace($pattern, '<sup>Rp </sup>$1<sup>$2</sup><sup>/bln</sup>', $harga_baru);

// print_r($format[0]['bayi_new']);
// die();
echo $twig->render('landingPage.twig', [
    'base_url' => 'assets/',
    'favicon' => '/',
    'welcome' => 'PHP Hosting',
    'last_price' => $harga_lama,
    'new_price' => $format
]);
