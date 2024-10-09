<?php
    $Student =array("name"=>"prajakta","age"=>"19","gender"=>"Female","Grade"=>"A+");
        echo $Student["name"]."<br>";
        echo $Student["gender"]."<br>";
        echo $Student["age"]."<br>";
        echo $Student["Grade"]."<br>";


        //Element Add Karna Associative Array Mein: 
        $Student["City"]="Munbai";
        print_r($Student);
    ?>