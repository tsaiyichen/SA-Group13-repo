<?php
$value = [];

$link = @mysqli_connect('localhost', 'root', '12345678', 'sa');
session_start();
//create the record
$currentUserID = $_SESSION['userID'];
$tablewarePointDeduction = 0;
$sql = 'SELECT * FROM item WHERE itemType = "badTableware"';
$result = mysqli_query($link, $sql);
$count = 0;
while($row = mysqli_fetch_assoc($result)){
    $ID[$count] = $row['itemID'];
    $value[$count] = $row['itemCarbon'];
    $count++;
}
$sql = "INSERT INTO record (userID) VALUES ('$currentUserID')";
$result = mysqli_query($link, $sql);
if(!($result)){
    echo "insert error!";
}

$sql = "SELECT MAX(recordID) AS nowID FROM record WHERE userID = '$currentUserID'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
$nowID = $row['nowID'];
//calculate the carbon
    $tablewareCarbon = 0;
    $input = array($_GET['stick'], $_GET['bag'], $_GET['straw'], $_GET['cup'], $_GET['spoon'], $_GET['paper']);
    for($i = 0; $i < count($input); $i++){
        if($input[$i] != 0){
            $tablewarePointDeduction++;
        }
        $sql = "INSERT INTO recorddetail (recordID, itemID, count) VALUES ('$nowID', '$ID[$i]', '$input[$i]')";
        $result = mysqli_query($link, $sql);
        if(!($result)){
            echo "recordDetail error!";
        }
        $tablewareCarbon += $input[$i] * $value[$i];

    }
$sql3 = "UPDATE record set getPoint = getPoint - $tablewarePointDeduction, tablewareCarbon = '$tablewareCarbon' WHERE recordID = '$nowID'";
$result3 = mysqli_query($link, $sql3);

//locate to count_2.php

    header("Location: count2.php");
?>