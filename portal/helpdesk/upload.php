<?php
    
    if(!empty($_FILES)) {
        $fileName               =           $_FILES['file']['name'];
        $source_path            =           $_FILES['file']['tmp_name'];
        $fileExtension          =           pathinfo($fileName, PATHINFO_EXTENSION);
        // ------ Replacing file name with new file name ---------
        $targetFile             =           time()."-".time()."-".strtolower(str_replace(" ","-",$fileName));
        $target_path            =           "img/".$targetFile;
        if(move_uploaded_file($source_path, $target_path)) {
            echo "File uploaded successfully";
        }       
    }
?>