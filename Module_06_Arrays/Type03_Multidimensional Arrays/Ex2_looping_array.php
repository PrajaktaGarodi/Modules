<?php
$students = array(
    array("Rahul", 20, "A"),
    array("Priya", 22, "B"),
    array("Aman", 19, "A+")
);

for ($i = 0; $i < count($students); $i++) {
    for ($j = 0; $j < count($students[$i]); $j++) {
        echo $students[$i][$j] . "<br>";
    }
    echo "<br>";
}
?>