<?php
session_start();
$value['car'] = 0.18;
$value['motor'] = 0.092;
$link = @mysqli_connect('localhost', 'root', '12345678', 'sa');
$currentUserID = $_SESSION['userID'];
$trafficPointDeduction = 0;
//Find the record address

$sql = "SELECT MAX(number) AS currentNumber FROM record WHERE userID = '$currentUserID'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
$number = $row['currentNumber'];

//Calculate the Carbon emission

$input = array($_GET['car'], $_GET['motor']);
    if($input[0] % 10 >= 5){
        $trafficPointDeduction += ceil($input[0] / 10);
    }else{
        $trafficPointDeduction += floor($input[0] / 10);
    }
    if($input[1] % 10 >= 5){
            $trafficPointDeduction += ceil($input[1] / 10);
    }else{
            $trafficPointDeduction += floor($input[1] / 10);
    }
    $trafficCarbon = $input[0] * $value['car'] + $input[1] * $value['motor'];

$sql2 = "UPDATE record set getPoint = getPoint - $trafficPointDeduction, trafficCarbon = '$trafficCarbon' WHERE number = '$number' and userID = '$currentUserID'";
$result2 = mysqli_query($link, $sql2);

//locate to count_4.php
    header("Location: count4.php");
?>