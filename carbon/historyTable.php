<?php
$currentUserID = $_SESSION['userID'];
$type = $_GET['type'];
$link = @mysqli_connect('localhost', 'root', '12345678', 'sa');
$sql = "SELECT * FROM record WHERE userID = '$currentUserID'";
$sql2 = "SELECT * FROM item WHERE itemType = '$type'";
$result = mysqli_query($link, $sql);
$result2 = mysqli_query($link, $sql2);

if(isset($_GET['type'])){
?>
<table>
    <tr>
        <th scope="row">紀錄時間</th>
        <?php
            $count = 0;
            while($row2 = mysqli_fetch_assoc($result2)){
                $ID[$count] = $row2['itemID'];
                echo '<th scope="row">'.$row2['itemChinese'].'</th>';
                $count++;
            }
        ?>

        <?php
            if($type="badTableware")
        ?><th scope="row">一次性餐具所產生之碳排放量</th>
        <th scope="row">交通所產生之碳排放量</th>
        <th scope="row">獲得點數</th>
    </tr>
    <tr>
        <?php
            while($row = mysqli_fetch_assoc($result)){
                $nowID = $row['recordID'];
                echo '<td>'.$row['recordTime'].'</td>';
                for($i = 0; $i < count($ID); $i++){
                    $sql3 = "SELECT count FROM recorddetail WHERE recordID = '$nowID' AND itemID = '$ID[$i]'";
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
<?php }?>