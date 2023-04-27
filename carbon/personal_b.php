<?php
include('config.php');
$name = $_GET['name'];
$phone = $_GET['phone'];
$password = $_GET['password'];
$userID = $_GET['userID'];


$sql = "update account set
name = '$name',
phone ='$phone',
password = '$password'
where userID = $userID";
$result = mysqli_query($link, $sql);

if($result){
    echo "<script>";
    echo "alert('修改成功');";
    echo "history.back();";
    echo "</script>";
}else{
    echo "<script>";
    echo "alert('修改失敗，請再試一次!');";
    echo "history.back();";
    echo "</script>";
}

?>