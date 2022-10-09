<!-- 
$GLOBALS متغیر سراسری
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION 
-->

<!-- ================================= -->

<?php
$x = 75;
$y = 25;
 
function addition() {
    global $x;
    $GLOBALS['z'] = $x + $GLOBALS['y'];

}
addition();
echo $z;

// ===========================================

?>

