
<?php function sum(...$numbers)
{     
    $total = 0;     foreach ($numbers as $number) 
        {       
          $total += $number;    
        }   
     return $total; 
}  
      echo "Sum: " . sum(1, 2, 3, 4);
 ?> 
