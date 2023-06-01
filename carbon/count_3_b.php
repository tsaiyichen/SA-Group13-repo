<?php
session_start();
$value = [];
$link = @mysqli_connect('localhost', 'root', '12345678', 'sa');
$currentUserID = $_SESSION['userID'];
$trafficPointDeduction = 0;

$sql = 'SELECT * FROM item WHERE itemType = "badTraffic"';
$result = mysqli_query($link, $sql);
$count = 0;
while($row = mysqli_fetch_assoc($result)){
    $ID[$count] = $row['itemID'];
    $value[$count] = $row['itemCarbon'];
    $count++;
}

//Find the record address
$sql = "SELECT MAX(recordID) AS nowID FROM record WHERE userID = '$currentUserID'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
$nowID = $row['nowID'];

//Calculate the Carbon emission
$trafficCarbon = 0;
$trafficPointDeduction = 0;
$input = array($_GET['car'], $_GET['motor']);
for($i = 0; $i < count($input); $i++){
   if($input[$i] % 10 >= 5){
       $trafficPointDeduction += ceil($input[$i] / 10);
   }else{
       $trafficPointDeduction += floor($input[$i] / 10);
   }
   $carbonDetail = $input[$i] * $value[$i];
   $trafficCarbon += $carbonDetail;
   $sql = "INSERT INTO recorddetail (recordID, itemID, count, carbonDetail) VALUES ('$nowID', '$ID[$i]', '$input[$i]', '$carbonDetail')";
   $result = mysqli_query($link, $sql);
   if(!($result)){
        echo "recordDetail error!";
   }
}

$sql2 = "UPDATE record set getPoint = getPoint - $trafficPointDeduction, trafficCarbon = '$trafficCarbon' WHERE recordID = '$nowID'";
$result2 = mysqli_query($link, $sql2);

//locate to count_4.php
    header("Location: count4.php");
?>