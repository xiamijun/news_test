<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2016/6/22
 * Time: 14:04
 */
require_once 'conn.php';

if(!empty($_GET['del'])){
    $d=$_GET['del'];
    $sql="delete from news where id=$d";
    mysqli_query($conn,$sql);
    echo 'success';
}