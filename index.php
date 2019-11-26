<?php
require_once 'init.php';

$page_content = include_template('main.php', [
    'announcement' => $announcement
]);
$layout_content = include_template('layout.php', [
    'content' => $page_content,
    'bets' => $bets,
    'categories' => $categories
]);
print($layout_content);
