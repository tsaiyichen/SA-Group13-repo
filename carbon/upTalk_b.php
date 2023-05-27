<?php
$userID = $_GET['userID'];
$articleID = $_GET['articleID'];
$content = $_GET['content'];
$title = $_GET['title'];

$link = @mysqli_connect('localhost', 'root', '12345678', 'sa');
$sql = "INSERT INTO article　(articleID, title, content, userID) VALUES ('$articleID', '$title', '$content', '$title')";
$result = mysqli_query($link, $sql);
if($result){
?>
<script language="javascript">
    alert("新增文章成功");
    location.herf="talk.php";
    //location.herf="talkDetail.php?articleID=<?php echo $articleID;?>";
</script>
<?php
}else{
    echo("error!!");
}
?>