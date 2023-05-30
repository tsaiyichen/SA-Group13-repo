<?php
$articleID = $_GET['article'];
$userID = $_GET['userID'];
$content = $_GET['content'];

$link = mysqli_connect('localhost', 'root', '12345678', 'sa');
$sql = "INSERT INTO response (userID, articleID, content) VALUES ('$userID', '$articleID', '$content')";

$result = mysqli_query($link, $sql);

if($result){
?>
<script language="javascript">
    alert("已回覆!!");
    location.href="talk.php";
</script>
<?php
}else{
    echo "error";
}
?>