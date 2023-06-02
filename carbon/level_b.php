<?php

session_start();
$link = @mysqli_connect('localhost', 'root', '12345678', 'sa');
$level = $_GET['level'];
$userID = $_GET['userID'];


$sql = "update account set
level ='$level'
where userID = '$userID'";


$result = mysqli_query($link, $sql);
if($result){?>
    <script language="javascript">
    alert('將<?php echo $userID?>修改為<?php echo $level?>');
    location.href="level.php";
</script>
<?php

}
?>
