<?php
$value['stick'] = 0.05;
$value['straw'] = 0.004;
$value['bag'] = 0.057;
$value['cup'] = 0.008;
$value['spoon'] = 0.0037;
$value['paper'] = 0.005;
$link = @mysqli_connect('localhost', 'root', '12345678', 'sa');
//create the record
$currentUserID = "yyt0313";
$tablewarePointDeduction = 0;
$sql = "SELECT * FROM record WHERE userID = '$currentUserID'";
$result = mysqli_query($link, $sql);
$count = 0;
While($row = mysqli_fetch_assoc($result)){
    $count++;
}
if($count == 0){
    $number = 1;
}else{
    $number = $count + 1;
}
$sql2 = "INSERT INTO record (number, userID) VALUES ('$number', '$currentUserID')";
$result2 = mysqli_query($link, $sql2);
//calculate the carbon

$input = array($_GET['stick'], $_GET['bag'], $_GET['straw'], $_GET['cup'], $_GET['spoon'], $_GET['paper']);
    for($i = 0; $i < count($input); $i++){
        if($input[$i] != 0){
        $tablewarePointDeduction++;
        }
    }
$tablewareCarbon = $input[0] * $value['stick'] + $input[1] * $value['bag'] + $input[2] * $value['straw'] + $input[3] * $value['cup'] + $input[4] * $value['spoon'] + $input[5] * $value['paper'];
$sql3 = "UPDATE record set getPoint = getPoint - $tablewarePointDeduction, tablewareCarbon = '$tablewareCarbon' WHERE number = '$number' and userID = '$currentUserID'";
$result3 = mysqli_query($link, $sql3);

//locate to count_2.php

    header("Location: count2.php");
?>