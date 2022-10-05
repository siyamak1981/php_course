<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>
<!-- ========================================== -->

<?php
echo "The time is " . date("h:i:sa");
?>
<!-- ========================================== -->



<?php
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
?>


<!-- ================================================= -->
<!-- mktime(hour, minute, second, month, day, year) -->
<?php
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>

<!-- ====================================== -->


<?php
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>
<!-- =========================================== -->


<?php
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}
?>