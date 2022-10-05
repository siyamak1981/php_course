<?php
echo readfile("test.txt");
?>

<!-- or -->
<!-- ====================================== -->


<?php
    $myfile = fopen("test.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("test.txt"));
    fclose($myfile);
?>
<!-- ========================================== -->




<!-- 
r	Open a file for read only. File pointer starts at the beginning of the file
w	Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x	Creates a new file for write only. Returns FALSE and an error if file already exists
r+	Open a file for read/write. File pointer starts at the beginning of the file
w+	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a+	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x+	Creates a new file for read/write. Returns FALSE and an error if file already exists -->


<!-- ==================================================== -->


<?php
    $myfile = fopen("test.txt", "r") or die("Unable to open file!");
    echo fgets($myfile);
    fclose($myfile);
?>
<!-- ================================================ -->



<?php
    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    $txt = "John Doe\n";
    fwrite($myfile, $txt);
   
    fclose($myfile);
?>