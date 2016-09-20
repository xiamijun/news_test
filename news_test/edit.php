<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>添加</title>
</head>
<body>
<?php

require_once 'conn.php';

if(!empty($_GET['id'])){
    $id=$_GET['id'];
    $sql="select * from news where id=$id";
    $query=mysqli_query($conn,$sql);
    $rs=mysqli_fetch_array($query);
}

if(!empty($_POST['sub'])){

    $title=$_POST['title'];
    $con=$_POST['con'];
    $hid=$_POST['hid'];
    $sql="update news set title='$title',contents='$con' where id=$hid";
    mysqli_query($conn,$sql);
    header('Location:index.php');

}

?>

<form action="edit.php" method="post">
    <input type="hidden" name="hid" value="<?php echo $rs['id']; ?>">
    标题:<input type="text" name="title" value="<?php echo $rs['title']; ?>"><br>
    内容：<textarea rows="5" cols="50" name="con"><?php echo $rs['contents']; ?></textarea><br>
    <input type="submit" name="sub" value="发表">
</form>



</body>
</html>


