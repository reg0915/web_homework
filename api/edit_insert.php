<?php

include_once "db.php";
$table='question';
$db=ucfirst($table);

$$db->save($_POST);




// to("../admin.php?do=$table");

echo "<script>alert('新增成功');window.location='../admin.php?do=$table';</script>";
?>