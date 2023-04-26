<?php
include('config.php');
$userID = $_GET['userID'];
$password =$_GET['password'];

$sql ="select * from account where userID = '$userID' and password = '$password'";

$result=mysqli_query($link,$sql);
if($row = mysqli_fetch_assoc($result))
{
    header("location: home.php");?>
    <script language="javascript">
    alert('登出成功');
    history.back();
    </script>
    <?php
}
else{

    ?>

<script language="javascript">
    alert('登出失敗');
    history.back();
</script>

<?php
}
?>