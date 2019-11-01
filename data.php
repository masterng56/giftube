<?php
// ставки пользователей, которыми надо заполнить таблицу
$bets = [
    ['name' => 'Иван', 'price' => 11500, 'ts' => strtotime('-' . rand(1, 50) .' minute')],
    ['name' => 'Константин', 'price' => 11000, 'ts' => strtotime('-' . rand(1, 18) .' hour')],
    ['name' => 'Евгений', 'price' => 10500, 'ts' => strtotime('-' . rand(25, 50) .' hour')],
    ['name' => 'Семён', 'price' => 10000, 'ts' => strtotime('last week')]
];

$categories = ["Доски и лыжи", "Крепление", "Ботинки", "Одежда", "Инструменты", "Разное"];

$announcement = [
    0 => [
        'title' => '2014 Rossignol District Snowboard',
        'cat'   => 'Доски и лыжи',
        'price' => '10999',
        'url'   => 'img/lot-1.jpg'
    ],
    1 => [
        'title' => 'DC Ply Mens 2016/2017 Snowboard',
        'cat'   => 'Доски и лыжи',
        'price' => '159999',
        'url'   => 'img/lot-2.jpg'
    ],
    2 => [
        'title' => 'Крепления Union Contact Pro 2015 года размер L/XL',
        'cat'   => 'Крепления',
        'price' => '8000',
        'url'   => 'img/lot-3.jpg'
    ],
    3 => [
        'title' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'cat'   => 'Ботинки',
        'price' => '10999',
        'url'   => 'img/lot-4.jpg'
    ],
    4 => [
        'title' => 'Куртка для сноуборда DC Mutiny Charocal',
        'cat'   => 'Одежда',
        'price' => '7500',
        'url'   => 'img/lot-5.jpg'
    ],
    5 => [
        'title' => 'Маска Oakley Canopy',
        'cat'   => 'Разное',
        'price' => '945.65',
        'url'   => 'img/lot-6.jpg'
    ]
];
