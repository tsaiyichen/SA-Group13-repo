<?php
session_start();
$currentUserID = $_SESSION['userID'];
$link = @mysqli_connect('localhost', 'root', '12345678', 'sa');
$sql = "SELECT * FROM record, recorddetail, item WHERE record.recordID = recorddetail.recordID AND userID = '$currentUserID'";
$sql2 = "SELECT * FROM item";
$result = mysqli_query($link, $sql);
$result2 = mysqli_query($link, $sql2);
?>
<table>
    <tr>
        <th scope="row">紀錄時間</th>
        <?php
            while($row2 = mysqli_fetch_assoc($result2)){
                echo '<th scope="row">'.$row2['itemChinese'].'</th>';
            }
        ?>

        <th scope="row">一次性餐具所產生之碳排放量</th>
        <th scope="row">交通所產生之碳排放量</th>
        <th scope="row">獲得點數</th>
    </tr>
    <tr>
        <?php
            while($row = mysqli_fetch_assoc($result)){
                $nowID = $row['recordID'];
                echo '<td>'.$row['recordTime'].'</td>';

                while($row4 = mysqli_fetch_assoc($result2)){
                    $itemID = $row4['itemID'];
                    $sql3 = "SELECT count FROM recorddetail WHERE recordID = '$recordID'";
                    $result3 = mysqli_query($link, $sql3);
                    $row3 = mysqli_fetch_assoc($result3);
                    echo '<td>'.$row3['count'].'</td>';
                }

                echo '<td>'.$row['tablewareCarbon'].'</td>';
                echo '<td>'.$row['trafficCarbon'].'</td>';
                echo '<td>'.$row['getPoint'].'</td>';
            }
        ?>
    </tr>
</table>