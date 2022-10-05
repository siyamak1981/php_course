<?php
$mysqli = mysqli_connect("localhost", "root", "siyamak1981", "php_course");
if (!$mysqli) {
    echo "Error : Unable to open database kofti\n";
} else {
    echo "Opened database successfully\n";
}


$sql = "SELECT id , name FROM cms";
$result = mysqli_query($mysqli, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
        echo $row['id'];
    }
}