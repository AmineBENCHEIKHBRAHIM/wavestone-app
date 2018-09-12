<html>
<head>
<script src="../js/xlsx.full.min.js"></script>
</head>
<body>


<script>
/* set up XMLHttpRequest */


/* set up XMLHttpRequest */
var url = "../images/pIDA-12.xlsb";

var oReq = new XMLHttpRequest();
oReq.open("GET", url, true);
oReq.responseType = "arraybuffer";

oReq.onload = function(e) {
  var arraybuffer = oReq.response;

  /* convert data to binary string */
  var data = new Uint8Array(arraybuffer);
  var arr = new Array();
  for(var i = 0; i != data.length; ++i) arr[i] = String.fromCharCode(data[i]);
  var bstr = arr.join("");

  /* Call XLSX */
  var workbook = XLSX.read(bstr, {type:"binary"});

  /* DO SOMETHING WITH workbook HERE */
  var first_sheet_name = workbook.SheetNames[0];
  /* Get worksheet */
  var worksheet = workbook.Sheets[first_sheet_name];
  console.log(XLSX.utils.sheet_to_csv(worksheet,{raw:true}));

var csvwork = XLSX.utils.sheet_to_csv(worksheet,{raw:true});

 
  var csvworkbook = XLSX.read(csvwork,{type:"binary"});
  var first_sheet_name = csvworkbook.SheetNames[0];

  /* Get worksheet */
  var worksheet = csvworkbook.Sheets[first_sheet_name];
  
  //Identify Cells
  var ConsultantsNumber_address_of_cell = 'F1';



  /* Find ientified cells */
  var ConsultantsNumber_cell = worksheet[ConsultantsNumber_address_of_cell];

  /* Get the value */
  var ConsultantsNumber_value = (ConsultantsNumber_cell ? ConsultantsNumber_cell.v : undefined);

  window.alert("Consultants number is : ".concat(ConsultantsNumber_value));
  
}

oReq.send();

</script>


</body>
</html>





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
                //get name of the file without extension
                $name_upload = substr($_FILES['upload']['name'][$i],0,strrpos($_FILES['upload']['name'][$i],'.'));
                echo "extension : ".$extension_upload;
                if (in_array($extension_upload,$extensions_valides) ){
                
                //save the filename
                $shortname = $_FILES['upload']['name'][$i];
                
                //save the url and the file
                //$filePath = "/".date('d-m-Y-H-i-s',strtotime('+2 hours')).'-'.$shortname;
                $filePath = "/".date('d-m-Y-H-i-s',strtotime('+2 hours')).'-'.$name_upload.'.csv';

                echo '$tmpFilePath :'.$tmpFilePath;
                echo "<br>";
                echo '$extension_upload :'.$extension_upload;
                echo "<br>";
                echo '$name_upload :'.$name_upload;
                echo "<br>";
                echo '$shortname :'.$shortname;
                echo "<br>";
                echo '$filePath :'.$filePath;
                echo "<br>";
               
                echo "<script>document.writeln(ConsultantsNumber_value);</script>";
                
                //to delete
                //$newFileContent = file_get_contents($_FILES['userfile']['tmp_name']);
                
                
                
                //$default_bucket = CloudStorageTools::getDefaultGoogleStorageBucketName();
                //file_put_contents("gs://${default_bucket}".$filePath, $tmpFilePath);
                
                echo "file ".$shortname." uploaded to ".$default_bucket." bucket";
                ?>
                <!-- <meta http-equiv="refresh" content="2;url=http://wavestone-app.appspot.com/upload.php">-->
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

?>