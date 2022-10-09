<!-- sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key -->


<?php
    // $numbers = array(4, 6, 252, 22, 11);
    // rsort($numbers);
    
    // $arrlength = count($numbers);
    // for($x = 0; $x < $arrlength; $x++) {
    //     echo $numbers[$x];
    //     echo "<br>";
    // }
// ==============================================
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    asort($age);

    foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>