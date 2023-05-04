
<?php

session_start();
$link = @mysqli_connect('localhost', 'root', '12345678', 'sa');
    $ID=$_GET['ID'];
    $sql= "delete from shop where ID=$ID";
    $result = mysqli_query($link, $sql);

if($result){?>
        <script language="javascript">
        alert('刪除成功');
        location.href="shopNews.php";
    </script><?php
    }else{?>
        <script language="javascript">
        alert('刪除失敗');
        history.back();
    </script><?php

    }
    ?>
