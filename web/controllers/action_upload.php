<?php

use google\appengine\api\cloud_storage\CloudStorageTools;

//echo date_default_timezone_get();

//date_default_timezone_set('Europe/Paris');

$extensions_valides = array('xlsb','xlsx','csv','xlsm','xls');


if(isset($_POST['submit'])){
    if(count($_FILES['upload']['name'])>0){
        //Loop through each file
        for($i=0; $i<count($_FILES['upload']['name']); $i++){
            //Get the temp file path
            $tmpFilePath = $_FILES['upload']['tmp_name'][$i];
            //make sur we have a filepath
            if($tmpFilePath != ""){
                
                $extension_upload = strtolower(  substr(  strrchr($_FILES['upload']['name'][$i], '.')  ,1)  );
                echo "extension : ".$extension_upload;
                if (in_array($extension_upload,$extensions_valides) ){
                
                //save the filename
                $shortname = $_FILES['upload']['name'][$i];
                
                //save the url and the file
                $filePath = "/".date('d-m-Y-H-i-s',strtotime('+2 hours')).'-'.$shortname;
                
                
                //$newFileContent = file_get_contents($_FILES['userfile']['tmp_name']);
                $default_bucket = CloudStorageTools::getDefaultGoogleStorageBucketName();
                file_put_contents("gs://${default_bucket}".$filePath, $tmpFilePath);
                
                echo "file ".$shortname." uploaded to ".$default_bucket." bucket";
                ?>
                <meta http-equiv="refresh" content="2;url=http://wavestone-app.appspot.com/upload.php">
                <?php
                
                
                }else{
                    echo "Extension du fichier non valide";
                    ?>
                <meta http-equiv="refresh" content="2;url=http://wavestone-app.appspot.com/upload.php">
                <?php
                }
            }else{
                echo "no file path found";
                ?>
                <meta http-equiv="refresh" content="2;url=http://wavestone-app.appspot.com/upload.php">
                <?php
                }
        }
    }
    else
    {
        echo "no files uploaded";
        ?>
                <meta http-equiv="refresh" content="2;url=http://wavestone-app.appspot.com/upload.php">
                <?php
    }
}
/*
if(isset($_FILES['userfile'])){
           /* $name = $_FILES['userfile']['name'];
            $file_size =$_FILES['userfile']['size'];
            $file_tmp =$_FILES['userfile']['tmp_name'];
            $original = $root_path .$name;
            move_uploaded_file($file_tmp, $original);
            $_url=CloudStorageTools::getImageServingUrl($original);*/
            
    /*        
            $newFileContent = file_get_contents($_FILES['userfile']['tmp_name']);
            $default_bucket = CloudStorageTools::getDefaultGoogleStorageBucketName();
            file_put_contents("gs://${default_bucket}/hello_default.txt", $newFileContent);
            
}

*/
?>