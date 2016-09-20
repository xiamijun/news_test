<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>添加</title>
</head>
<body>
<form action="add.php" method="post">
    标题:<input type="text" name="title"><br>
    内容：<textarea rows="5" cols="50" name="con"></textarea><br>
    <input type="submit" name="sub" value="发表">
</form>

<?php

require_once 'conn.php';

if(!empty($_POST['sub'])){

    $title=$_POST['title'];
    $con=$_POST['con'];
    $sql="insert into news (title,dates,contents) values('$title',now(),'$con')";
    mysqli_query($conn,$sql);
    header('Location:index.php');

}
?>

</body>
</html>


