<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>首页</title>
</head>
<body>

<a href="add.php">添加</a><hr>
<form action="" method="get">
    <input type="text" name="keys">
    <input type="submit" name="subs" value="搜索">
</form>
<hr>
<?php

require_once 'conn.php';

if(!empty($_GET['keys'])){
    $w="title like '%".$_GET['keys']."%'";
}else{
    $w=1;
}

$sql="select * from news where $w order by id desc";
$query=mysqli_query($conn,$sql);
while($rs=mysqli_fetch_array($query)){

?>

<h2>标题：<a href="view.php?id=<?php echo $rs['id']; ?>"><?php echo $rs['title']; ?>||</a> <a href="edit.php?id=<?php echo $rs['id']; ?>">编辑</a>||<a href="del.php?del=<?php echo $rs['id']; ?>">删除</a></h2>
<li><?php echo $rs['dates']; ?></li>
<p><?php echo iconv_substr($rs['contents'],0,10,'gbk') ; ?>...</p>
<hr>

<?php
}
?>

</body>
</html>

<?php

?>