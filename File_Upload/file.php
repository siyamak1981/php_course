<!DOCTYPE html>
<html>
<body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
<?php
$picname = $_FILES['fileToUpload']['name']; #name of file
$x = mkdir("uploader/".$picname);

$array = expload(".", $picname);
// $total = count($array);
// var_dump($array[$total-1]);

// echo end($array);
$ext = end($array);
$newname = rand().".".$ext;

$form = $_FILES['fileToUpload']['tmp_name'];
$to = "uploader/".$newname;

move_uploaded_file($from, $to);
?>