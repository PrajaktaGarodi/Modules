<?Php
    $filename = "sample.txt";
    $file = fopen($filename,"r");
    if($file)
        {
            $filesize = filesize($filename);
            $content = fread($file,$filesize);
            echo "file content :" .$content;
            fclose ($file);
        }
?>