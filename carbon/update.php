<?php
$link = @mysqli_connect('localhost', 'root', '12345678', 'sa');
$name = $_POST['name'];
$price = $_POST['price'];
$introduction = $_POST['introduction'];
$sql = "INSERT INTO monster (name, introduction, price) VALUES ('$name', '$price', '$introduction')";
$result = mysqli_query($link, $sql);

$sql2 = "SELECT MAX(monsterID) as currentMonster FROM monster";
$result2 = mysqli_query($link, $sql2);

$row = mysqli_fetch_assoc($result2);
$currentMonster = $row['$currentMonster'];

if(isset($_POST['submit'])){
    $egg_name = $_FILES['egg']['name'];
    $egg_size = $_FILES['egg']['size'];
    $egg_tmp = $_FILES['egg']['tmp_name'];
    $egg_type = $_FILES['egg']['type'];
    $egg_ext = strtolower(end(explode('.',$_FILES['egg']['name'])));

    $eggDone_name = $_FILES['eggDone']['name'];
    $eggDone_size = $_FILES['eggDone']['size'];
    $eggDone_tmp = $_FILES['eggDone']['tmp_name'];
    $eggDone_type = $_FILES['eggDone']['type'];
    $eggDone_ext = strtolower(end(explode('.',$_FILES['eggDone']['name'])));

    $monster_name = $_FILES['monster']['name'];
    $monster_size = $_FILES['monster']['size'];
    $monster_tmp = $_FILES['monster']['tmp_name'];
    $monster_type = $_FILES['monster']['type'];
    $monster_ext = strtolower(end(explode('.',$_FILES['monster']['name'])));

    $extensions= array("jpg");

    if(in_array($egg_ext,$extensions)=== false){ ?>
    <script language="javascript">
        alert("extension not allowed, please choose a JPG file.");
        location.href = "goods.php";
    </script>
        <?php
    }

    if($file_size > 2097152) {  ?>
    <script language="javascript">
        alert("File size must be less than 2 MB!!");
        location.href = "goods.php";
    </script>
        <?php
    }

    $egg_target_dir = "egg/";
    $eggDone_target_dir = "eggDone/";
    $monster_target_dir = "monster/";

    $egg_target_file = $egg_target_dir . basename($egg_name);
    $eggDone_target_file = $eggDone_target_dir . basename($eggDone_name);
    $monster_target_file = $monster_target_dir . basename($monster_name);

    if(move_uploaded_file($egg_tmp, $egg_target_file)){
        $new_egg_name = $egg_target_dir . $currentMonster . '.' . $egg_ext;
        echo "The file " . basename($egg_name) . " has been uploaded as " . basename($new_egg_name) . ".";
    }
/*
    if (move_uploaded_file($file_tmp, $target_file)) {
        $upload_count = count(glob($target_dir . '*'));
    $new_file_name = $target_dir . $upload_count . '.' . $file_ext;
    echo "The file " . basename($file_name) . " has been uploaded as " . basename($new_file_name) . ".";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }*/
}
?>

<html>
<body>

<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="price">
    <input type="text" name="name">
    <textarea name="introduction"></textarea>
    <input type="file" name="egg">
    <input type="submit" name="submit" value="Upload">
</form>
</body>
</html>
