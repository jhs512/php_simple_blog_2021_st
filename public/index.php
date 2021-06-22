<?php
// DB 연결
$dbConn = mysqli_connect("127.0.0.1", "sbsst", "sbs123414", "php_simple_blog_st") or die("DB ERROR");

// DB에게 할 말을 적는다.
$sql = "
SELECT *
FROM article
ORDER BY id DESC
";

// DB에게 요청하고 응답을 받는다.
$rs = mysqli_query($dbConn, $sql);

$rows = [];

$rows[0] = mysqli_fetch_assoc($rs); // 2번글
$rows[1] = mysqli_fetch_assoc($rs); // 1번글
?>
<meta charset="UTF-8">

<div>
    번호 : <?=$rows[0]['id']?><br>
</div>
<hr>
<div>
    번호 : <?php echo $rows[1]['id']; ?><br>
</div>
<hr>