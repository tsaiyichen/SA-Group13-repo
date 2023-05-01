<?php
if(isset($_POST['submit'])){
    $file_name = $_FILES['file2']['name'];
    $file_size = $_FILES['file2']['size'];
    $file_tmp = $_FILES['file2']['tmp_name'];
    $file_type = $_FILES['file2']['type'];
    $file_ext = strtolower(end(explode('.',$_FILES['file2']['name'])));

    $extensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$extensions)=== false){
        echo "extension not allowed, please choose a JPEG or PNG file.";
    }

    if($file_size > 2097152) {
        echo 'File size must be less than 2 MB';
    }

    $target_dir = "photo/";
    $target_file = $target_dir . basename($file_name);

    if (move_uploaded_file($file_tmp, $target_file)) {
        $upload_count = count(glob($target_dir . '*'));
    $new_file_name = $target_dir . $upload_count . '.' . $file_ext;
    echo "The file " . basename($file_name) . " has been uploaded as " . basename($new_file_name) . ".";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>

<html>
<body>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file2" />
    <input type="submit" name="submit" value="Upload"/>
</form>
<?php $a = 3;?>
<img src="photo/<?php echo $a;?>.jpg">
</body>
</html>
