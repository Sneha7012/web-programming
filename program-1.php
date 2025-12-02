<?php

$students=array("Basima","Ameera","Mariya","Irfana","Sneha");
echo "<h2>Array before sorting:</h2>";
print_r($students);
echo"<br><br>";

asort($students);
echo "<h2>Array after ascending sorting(asort):</h2>";
print_r($students);
echo"<br><br>";

arsort($students);
echo "<h2>Array after descending sorting(arsort):</h2>";
print_r($students);

?>
