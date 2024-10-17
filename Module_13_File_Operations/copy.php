 <?php 
    if (copy("example.txt", "backup.txt"))     
        {     
            echo "File copied successfully!"; 
        } 
        else 
        {     
            echo "File copy failed!"; 
        } 
?> 