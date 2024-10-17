<?php
    $filename = "sample.txt";
    $file = fopen ($filename,"r");
    if($file)
        {
            echo "File Opened Successfully";
            fclose($file);
        }
    else
        {
            echo "Failed to open File!";
        }
?>