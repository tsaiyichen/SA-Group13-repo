<?php

session_start();
$link = @mysqli_connect('localhost', 'root', '12345678', 'sa');
$infoID=$_GET['infoID'];
$title=$_GET['title'];
$content=$_GET['content'];


$sql="INSERT into information(title,content) values ('$title','$content')";
$result=mysqli_query($link,$sql);
if($result){?>
    <script language="javascript">
    alert('新增成功');
    location.href="info.php";
</script><?php
}else{?>
   <script language="javascript">
    alert('新增失敗');
    history.back();
    </script>
<?php
}?>
