<?php
session_start();
$link = @mysqli_connect('localhost', 'root', '12345678', 'sa');
$currentUserID = $_SESSION['userID'];
$trafficPointAddition = 0;

//Find the record address

$sql = "SELECT MAX(number) AS currentNumber FROM record WHERE userID = '$currentUserID'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
$number = $row['currentNumber'];

//Calculate Carbon emission

$input = array($_GET['train'], $_GET['bus'], $_GET['hsr'], $_GET['mrt'], $_GET['bike'], $_GET['fcar']);
    for($m = 0; $m < count($input); $m++){
        if($input[$m] != 0){
            $trafficPointAddition++;
        }
    }


$sql2 = "UPDATE record set getPoint = getPoint + $trafficPointAddition WHERE number = '$number' and userID = '$currentUserID'";
$result2 = mysqli_query($link, $sql2);

//settlement

$sql3 = "SELECT * FROM record WHERE number = '$number' and userID = '$currentUserID'";
$result3 = mysqli_query($link, $sql3);
$row2 = mysqli_fetch_assoc($result3);
$getPoint = $row2['getPoint'];

$sql4 = "UPDATE account SET point = point + $getPoint WHERE userID = '$currentUserID'";
$result4 = mysqli_query($link, $sql4);

$sql5 = "SELECT point FROM account WHERE userID = '$currentUserID'";
$result5 = mysqli_query($link, $sql5);
if($result5){
$row = mysqli_fetch_assoc($result5);
if($row['point'] < 0){
    $sql6 = "UPDATE account SET point = 0 WHERE userID = '$currentUserID'";
    $result6 = mysqli_query($link, $sql6);
    if($result6){
        ?>
        <script language="javascript">
            alert("恭喜您獲得 <?php echo $getPoint?> 點，一次性餐具所產生碳排為: <?php echo $row2['tablewareCarbon']?>，交通所產生碳排為: <?php echo $row2['trafficCarbon']?>。您目前有 0 點 請繼續加油~!");
            location.href="count1.php";
        </script>
        <?php
    }else{
        ?>
        <script language="javascript">
            alert("fail!!");
            location.href="count1.php";
        </script>
        <?php
    }
}else{
    ?>
    <script language="javascript">
        alert("恭喜您獲得 <?php echo $getPoint?> 點，一次性餐具所產生碳排為: <?php echo $row2['tablewareCarbon']?>，交通所產生碳排為: <?php echo $row2['trafficCarbon']?>。您目前有 <?php echo $row['point']?> 點 請繼續加油~!");
        location.href="count1.php";
    </script>
    <?php
}
}else{
    ?>
    <script language="javascript">
    alert("fail!!!");
    location.href="count1.php";
    </script>
    <?php
}
?>