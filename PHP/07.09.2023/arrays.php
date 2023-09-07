<?php 
//array
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".<br>";
echo count($cars). "<br>";

//indexed array
$cars = array("Volvo", "BMW", "Toyota");
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota"; 

$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
echo "<br>";

//associative array
$ages = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
foreach($ages as $name => $age) {
    echo "$name is $age years old.<br>";
}
echo "<br>";

//multidimensional array 
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);

echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";

    echo "<ul>";

    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
  }
?>