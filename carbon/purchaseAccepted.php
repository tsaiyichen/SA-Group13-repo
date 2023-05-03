<?php
$link = @mysqli_connect('localhost', 'root', '12345678', 'sa');
$userID = $_GET['userID'];
$monsterID = $_GET['monsterID'];

$sql = "INSERT INTO purchase (monsterID, userID) VALUES ('$userID', '$monsterID')";
$result = mysqli_query($link, $sql);

if($result){
?>
<script language = "javacript">
    alert("購買成功");
    location.href="picture.php";
</script>
<?php
}else{?>
<script language="javascript">
    alert("購買失敗");
    location.href="shop.php";
</script>
}
?>