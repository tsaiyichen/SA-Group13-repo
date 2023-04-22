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

    $carbon['tableWare'] = $input[0] * $value['stick'] + $input[1] * $value['bag'] + $input[2] * $value['straw'] + $input[3] * $value['cup'] + $input[4] * $value['spoon'] + $input[5] * $value['paper'];
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
    $carbon['traffic'] = $input[0] * $value['car'] + $input[1] * $value['motor'];
    header("Location: count_4.php");
}else{
    $input = array($_GET['train'], $_GET['bus'], $_GET['hsr'], $_GET['mrt'], $_GET['bike'], $_GET['fcar']);
    for($m = 0; $m < count($input); $m++){
        if($input[$m] != 0){
            $trafficCount++;
        }
    }
    $point = $trafficCount + $tableWareCount;
    echo "You get ", $point, "point by carbon reducing!!!";
}
?>