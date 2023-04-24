<?php
    //$currentDate = date("Y-m-d");
    $currentDate = $_GET['currentDate'];
    $currentUserID = $_SESSION['userID'];
    $link = @mysqli_connect('localhost', 'root', '12345678', 'sa');
    $sql = "SELECT * FROM account WHERE userID = '$currentUserID' and recordTime = '$currentDate'";
    echo '<table><tr><th scope="row">紀錄時間</th><th>一次性餐具所產生之碳排放量</th><th scope="row">交通所產生之碳排放量</th><th scope="row">獲得點數</th></tr>';
    ?>