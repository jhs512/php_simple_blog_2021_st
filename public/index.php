<?php
$article2 = [
    "id" => 2,
    "regDate" => "2021-06-20 16:40:01",
    "title" => "제목2",
    "body" => "내용2",
];

$article1 = [
    "id" => 1,
    "regDate" => "2021-06-20 16:40:00",
    "title" => "제목1",
    "body" => "내용1",
];

$articles = [];

$articles[] = $article1;
$articles[] = $article2;

print_r($articles);
exit;

// echo $변수; exit;
// print_r($변수); exit;
// var_dump($변수); exit;