<?php
$method = $_GET['method'];
$value['stick'] = 0.05;
$value['straw'] = 0.004;
$value['bag'] = 0.057;
$value['cup'] = 0.008;
$value['spoon'] = 0.0037;
$value['paper'] = 0.005;
$value['car'] = 0.3;
$value['motor'] = 0.142;
$tableWareCount = 0;
$trafficCount = 0;
if($method == 1){
    $input = array($_GET['stick'], $_GET['bag'], $_GET['straw'], $_GET['cup'], $_GET['spoon'], $_GET['paper']);
    for($i = 0; $i < count($input); $i++){
        if($input[$i] != 0){
        $tableWareCount--;
        }
    }

    $tablewareCarbon = $input[0] * $value['stick'] + $input[1] * $value['bag'] + $input[2] * $value['straw'] + $input[3] * $value['cup'] + $input[4] * $value['spoon'] + $input[5] * $value['paper'];
    header("Location: count_2.php");
}elseif($method == 2){
    $input = array($_GET['fplate'], $_GET['fstick'], $_GET['fspoon'], $_GET['fcup'], $_GET['fstraw'], $_GET['fbag']);
    for($j = 0; $j < count($input); $j++){
        if($input[$j] != 0){
            $tableWareCount++;
        }
    }

    header("Location: count_3.php");
}elseif($method == 3){
    $input = array($_GET['car'], $_GET['motor']);
    if($input[0] % 10 >= 5){
        $trafficCount -= ceil($input[0] / 10);
    }else{
        $trafficCount -= floor($input[0] / 10);
    }
    if($input[1] % 10 >= 5){
            $trafficCount -= ceil($input[1] / 10);
    }else{
            $trafficCount -= floor($input[1] / 10);
    }
    $trafficCarbon = $input[0] * $value['car'] + $input[1] * $value['motor'];
    header("Location: count_4.php");
}else{
    $input = array($_GET['train'], $_GET['bus'], $_GET['hsr'], $_GET['mrt'], $_GET['bike'], $_GET['fcar']);
    for($m = 0; $m < count($input); $m++){
        if($input[$m] != 0){
            $trafficCount++;
        }
    }
    $point = $trafficCount + $tableWareCount;

    $link = @mysqli_connect('localhost', 'root', '12345678', 'sa');
    $currentUserID = $_SESSION['userID'];
    $sql = "SELECT point FROM account WHERE userID = $currentUserID";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    $updateValue = $row['point'] + $point
    $sql3 = "INSERT INTO record ('userID', 'tableware', 'traffic') VALUES ('$currentUserID', '$tablewareCarbon', '$trafficCarbon')";
    $result3 = mysqli_query($link, $sql3);
    if($updateValue < 0){
        $sql2 = "UPDATE 'account' SET 'point' = '0' WHERE 'userID' = '$currentUserID'";
        $result2 = mysqli_query($link, $sql2);
        if($result2){
            ?>
            <script language="javascript">
                alert("恭喜您獲得<?php echo $updateValue?>，一次性餐具所產生碳排為: <?php echo $tablewareCarbon?>，交通所產生碳排為: <?php echo $trafficCarbon?>。您目前有 0 點 請繼續加油~!");
                location.href="count_1.php";
            </script>
            <?php
        }else{
            ?>
            <script language="javascript">
                alert("fail!!!");
                location.href = "count_1.php";
            </script>
            <?php
        }
    }else{
        $sql2 = "UPDATE 'account' SET 'point' = '$updateValue' WHERE 'userID' = '$currentUserID'";
        $result2 = mysqli_query($link, $sql2);
        if($result2){
                ?>
                <script language="javascript">
                    alert("恭喜您獲得<?php echo $updateValue?>，一次性餐具所產生碳排為: <?php echo $tablewareCarbon?>，交通所產生碳排為: <?php echo $trafficCarbon?>。您目前有 <?php echo $updateValue?> 點 請繼續加油~!");
                    location.href="count_1.php";
                </script>
                <?php
                }else{
                    ?>
                    <script language="javascript">
                        alert("fail!!!");
                        location.href = "count_1.php";
                    </script>
                    <?php
                }
            }
    }
}
?>