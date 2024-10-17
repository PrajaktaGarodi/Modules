<?php 
    if (unlink("backup.txt"))    
      {    
         echo "File deleted successfully!";
      } 
        else 
    {    
        echo "File delete failed!"; 
    }
?> 