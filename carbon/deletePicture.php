<?php
$link = @mysqli_connect('localhost', 'root', '12345678', 'sa');

$monsterID = $_GET['monsterID'];

$sql = "DELETE FROM monster WHERE monsterID = '$monsterID'";

$result = mysqli_query($link, $sql);
if(!($result)){
?>
<script language="javascript">
    alert("sql Error");
    location.href="picture.php";
</script>
<?php
}


$eggPath = "egg/".$monsterID.".jpg";
$eggDonePath = "eggDone/".$monsterID.".jpg";
$monsterPath = "monster/".$monsterID.".jpg";

if(file_exists($eggPath) AND file_exists($eggDonePath) AND file_exists($monsterPath)){
    unlink($eggPath);
    unlink($eggDonePath);
    unlink($monsterPath);
}?>
<script language="javascript">
    alert("刪除成功");
    location.href="picture.php";
</script>
<?php
else{
?>
<script language="javascript">
    alert("Delete error");
    location.href="picture.php";
</script>
<?php
}

?>