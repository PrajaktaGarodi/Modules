<?php
    $filename = "example.txt"; 
    $file = fopen($filename, "w"); 
    if ($file)
        {    
            $content = "This is a new content!";    
            fwrite($file, $content);     
            echo "Data written successfully!"; 
            fclose($file); 
        }
?> 