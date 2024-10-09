<?php function name(&$a)
{
    $a += 20;
}
$b = 50;
name($b);
echo "Updated Number: $b"; 
?>