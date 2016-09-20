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

    $sql2="update news set hits=hits+1 where id=$id";
    mysqli_query($conn,$sql2);
}
?>

<h1><?php echo $rs['title']; ?></h1>
<h2><?php echo $rs['dates']; ?></h2>
<h3>点击量:<?php echo $rs['hits']; ?></h3>
<hr>
<p>
    <?php echo $rs['contents']; ?>
</p>

</body>
</html>


