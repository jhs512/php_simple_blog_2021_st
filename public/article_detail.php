<?php
// v1, 만들 때 부터, 이미 가지고 있음
$article1 = [
    "id" => 1,
    "regDate" => "2021-06-20 16:40:00",
    "title" => "제목1",
    "body" => "내용1",
];

print_r($article1);
echo "<hr>";

// v2, 만들 때 부터, 이미 가지고 있음
$article2 = [];
$article2["id"] = 2;
$article2["regDate"] = "2021-06-20 16:40:01";
$article2["title"] = "제목2";
$article2["body"] = "내용2";

print_r($article2);
echo "<hr>";