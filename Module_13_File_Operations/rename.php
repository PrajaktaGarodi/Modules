<?php 
    if (rename("example.txt", "new_example.txt")) 
            {       
                echo "File renamed successfully!"; 
            }   
                else 
            {     
                echo "File rename failed!"; 
            } 
?> 