<?php
$link = @mysqli_connect('localhost', 'root', '12345678', 'sa');
$currentUserID = $_SESSION['userID'];
$tablewarePointAddition = 0;
//Find the record address

$sql = "SELECT MAX(number) AS currentNumber FROM record WHERE userID = '$currentUserID'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
$number = $row['currentNumber'];

//Calculate the Carbon emission

$input = array($_GET['fplate'], $_GET['fstick'], $_GET['fspoon'], $_GET['fcup'], $_GET['fstraw'], $_GET['fbag']);
    for($j = 0; $j < count($input); $j++){
        if($input[$j] != 0){
            $tablewarePointAddition++;
        }
    }
$sql2 = "UPDATE record SET getPoint = getPoint + $tablewarePointAddition WHERE number = '$number' AND userID = '$currentUserID'";
$result2 = mysqli_query($link, $sql2);

//locate to count_3.php

    header("Location: count3.php");
?>