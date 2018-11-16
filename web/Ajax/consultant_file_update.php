<?php 

//print_r($_POST);
$idConsultant = NULL;
$NomPrenom = '';
$NomPrenomHashed='';
$CDM = '';
$NombreProdM0 = 0.0;
$NombreProdM1 = 0.0;
$NombreProdM2 = 0.0;
$NombreImprodM0 = 0.0;
$NombreImprodM1 = 0.0;
$NombreImprodM2 = 0.0;
$NombreCongeM0 = 0.0;
$NombreCongeM1 = 0.0;
$NombreCongeM2 = 0.0;
$NombreDispoM0 = 0.0;
$NombreDispoM1 = 0.0;
$NombreDispoM2 = 0.0;
$Titre = '';
$ExperienceY = NULL;
$ExperienceM = NULL;
$InfosBrutes = '';
$Domicile = '';



if(isset($_POST['idConsultant']) && $_POST['idConsultant']!='' && $_POST['idConsultant']!='undefined'){
    $idConsultant = intval($_POST['idConsultant']);
}

if(isset($_POST['NomPrenom']) && $_POST['NomPrenom']!='' && $_POST['NomPrenom']!='undefined'){   
    if(! get_magic_quotes_gpc() ) {
        $NomPrenom = addslashes($_POST['NomPrenom']);
    } else {
        $NomPrenom = $_POST['NomPrenom'];
    }  
}

if(isset($_POST['CDM']) && $_POST['CDM']!='' && $_POST['CDM']!='undefined'){
    
    if(! get_magic_quotes_gpc() ) {
        $CDM = addslashes($_POST['CDM']);
    } else {
        $CDM = $_POST['CDM'];
    }  
}


if(isset($_POST['NombreProdM0']) && $_POST['NombreProdM0']!='' && $_POST['NombreProdM0']!='undefined'){
    $NombreProdM0 = floatval($_POST['NombreProdM0']);
}

if(isset($_POST['NombreProdM1']) && $_POST['NombreProdM1']!='' && $_POST['NombreProdM1']!='undefined'){
    $NombreProdM1 = floatval($_POST['NombreProdM1']);
}

if(isset($_POST['NombreProdM2']) && $_POST['NombreProdM2']!='' && $_POST['NombreProdM2']!='undefined'){
    $NombreProdM2 = floatval($_POST['NombreProdM2']);
}

if(isset($_POST['NombreImprodM0']) && $_POST['NombreImprodM0']!='' && $_POST['NombreImprodM0']!='undefined'){
    $NombreImprodM0 = floatval($_POST['NombreImprodM0']);
}

if(isset($_POST['NombreImprodM1']) && $_POST['NombreImprodM1']!='' && $_POST['NombreImprodM1']!='undefined'){
    $NombreImprodM1 = floatval($_POST['NombreImprodM1']);
}

if(isset($_POST['NombreImprodM2']) && $_POST['NombreImprodM2']!='' && $_POST['NombreImprodM2']!='undefined'){
    $NombreImprodM2 = floatval($_POST['NombreImprodM2']);
}

if(isset($_POST['NombreCongeM0']) && $_POST['NombreCongeM0']!='' && $_POST['NombreCongeM0']!='undefined'){
    $NombreCongeM0 = floatval($_POST['NombreCongeM0']);
}

if(isset($_POST['NombreCongeM1']) && $_POST['NombreCongeM1']!='' && $_POST['NombreCongeM1']!='undefined'){
    $NombreCongeM1 = floatval($_POST['NombreCongeM1']);
}

if(isset($_POST['NombreCongeM2']) && $_POST['NombreCongeM2']!='' && $_POST['NombreCongeM2']!='undefined'){
    $NombreCongeM2 = floatval($_POST['NombreCongeM2']);
}


if(isset($_POST['NombreDispoM0']) && $_POST['NombreDispoM0']!='' && $_POST['NombreDispoM0']!='undefined'){
    $NombreDispoM0 = floatval($_POST['NombreDispoM0']);
}

if(isset($_POST['NombreDispoM1']) && $_POST['NombreDispoM1']!='' && $_POST['NombreDispoM1']!='undefined'){
    $NombreDispoM1 = floatval($_POST['NombreDispoM1']);
}

if(isset($_POST['NombreDispoM2']) && $_POST['NombreDispoM2']!='' && $_POST['NombreDispoM2']!='undefined'){
    $NombreDispoM2 = floatval($_POST['NombreDispoM2']);
}

if(isset($_POST['Titre']) && $_POST['Titre']!='' && $_POST['Titre']!='undefined'){
    
    if(! get_magic_quotes_gpc() ) {
        $Titre = addslashes($_POST['Titre']);
    } else {
        $Titre = $_POST['Titre'];
    }  
}

if(isset($_POST['ExperienceY']) && $_POST['ExperienceY']!='' && $_POST['ExperienceY']!='undefined'){
    $ExperienceY = intval($_POST['ExperienceY']);
}

if(isset($_POST['ExperienceM']) && $_POST['ExperienceM']!='' && $_POST['ExperienceM']!='undefined'){
    $ExperienceM = intval($_POST['ExperienceM']);
}

if(isset($_POST['InfosBrutes']) && $_POST['InfosBrutes']!='' && $_POST['InfosBrutes']!= 'undefined'){
    
    if(! get_magic_quotes_gpc() ) {
        $InfosBrutes = addslashes($_POST['InfosBrutes']);
    } else {
        $InfosBrutes = $_POST['InfosBrutes'];
    }  
}

if(isset($_POST['Domicile']) && $_POST['Domicile']!='' && $_POST['Domicile']!='undefined'){
    
    if(! get_magic_quotes_gpc() ) {
        $Domicile = addslashes($_POST['Domicile']);
    } else {
        $Domicile = $_POST['Domicile'];;
    }  
}

// Replace chars in NomPrenom

$NomPrenomHashed_tmp = strtolower($NomPrenom);


$unwanted_array = array('à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
    'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
    'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );

//$NomPrenomHashed = strtr( $NomPrenomHashed_tmp, $unwanted_array);
$NomPrenomHashed = str_replace( "é", "e" ,$NomPrenomHashed_tmp);
$NomPrenomHashed = str_replace( "è", "e" ,$NomPrenomHashed_tmp);
$NomPrenomHashed = str_replace( "ê", "e" ,$NomPrenomHashed_tmp);
$NomPrenomHashed = str_replace( "ù", "u" ,$NomPrenomHashed_tmp);
$NomPrenomHashed = str_replace( "û", "u" ,$NomPrenomHashed_tmp);
$NomPrenomHashed = str_replace( "à", "a" ,$NomPrenomHashed_tmp);
$NomPrenomHashed = str_replace( "â", "a" ,$NomPrenomHashed_tmp);

//echo "Hashed name for ".$NomPrenom." is ".$NomPrenomHashed;

//check if consultant exists

$conn = mysql_connect(getenv('MYSQL_DB'), getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'));
if (!$conn) {
    die('Connect Error (' . mysql__error());
}
//Select Database
$db_selected = mysql_select_db('wavestone-app', $conn);
if (!$db_selected) {
    die ('Can\'t use db : ' . mysql_error());
}


//$result = mysql_query("SELECT * FROM Consultant WHERE idConsultant=".$idConsultant.";");
$result = mysql_query("SELECT * FROM Consultant WHERE NomPrenomHashed='".$NomPrenomHashed."' AND CDM='".$CDM."';");

if (mysql_num_rows($result) > 0) {
    $Hashedid='';
    $Name='';
    $CDM_up='';
    // output data of each row
    while($row = mysql_fetch_assoc($result)) {
        $Hashedid=$row["NomPrenomHashed"];
        $Name = $row["NomPrenom"];
        $CDM_up = $row["CDM"];
        //echo "iddddddddddddddddddddddddddddddddddddddd=";echo $id;
    }
    
    //$sql = "UPDATE Consultant SET lastname='Doe' WHERE id=2";
    $sql2 = "UPDATE Consultant SET NomPrenom='".$NomPrenom."', CDM='".$CDM."', NombreProdM0=".$NombreProdM0.", NombreProdM1=".$NombreProdM1.", NombreProdM2=".$NombreProdM2.", NombreImprodM0=".$NombreImprodM0.", NombreImprodM1=".$NombreImprodM1.", NombreImprodM2=".$NombreImprodM2.", NombreCongeM0=".$NombreCongeM0.", NombreCongeM1=".$NombreCongeM1.", NombreCongeM2=".$NombreCongeM2.", NombreDispoM0=".$NombreDispoM0.", NombreDispoM1=".$NombreDispoM1.", NombreDispoM2=".$NombreDispoM2.", Titre='".$Titre."', ExperienceY=".$ExperienceY.", ExperienceM=".$ExperienceM.", InfosBrutes='".$InfosBrutes."', Domicile='".$Domicile."' WHERE NomPrenomHashed='".$Hashedid."' AND CDM='".$CDM_up."';";
    if (mysql_query($sql2)) {
        echo "Record updated successfully for consultant with Name =".$Name."\n";
    } else {
        echo "Error updating record: " . mysql_error($conn);
    }
    
    
    
    
} else {
    //Insert into database if non existant
    
    $conn = mysql_connect(getenv('MYSQL_DB'), getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'));
    if (!$conn) {
        die('Connect Error (' . mysql__error());
    }
    //Select Database
    $db_selected = mysql_select_db('wavestone-app', $conn);
    if (!$db_selected) {
        die ('Can\'t use db : ' . mysql_error());
    }
    $sql = "INSERT INTO Consultant (NomPrenom, NomPrenomHashed, CDM, NombreProdM0, NombreProdM1, NombreProdM2, NombreImprodM0, NombreImprodM1, NombreImprodM2, NombreCongeM0, NombreCongeM1, NombreCongeM2, NombreDispoM0, NombreDispoM1, NombreDispoM2, Titre, ExperienceY, ExperienceM, InfosBrutes, Domicile)
    VALUES ('$NomPrenom', '$NomPrenomHashed' , '$CDM', $NombreProdM0, $NombreProdM1, $NombreProdM2, $NombreImprodM0, $NombreImprodM1, $NombreImprodM2, $NombreCongeM0, $NombreCongeM1, $NombreCongeM2, $NombreDispoM0, $NombreDispoM1, $NombreDispoM2, '$Titre', $ExperienceY, $ExperienceM, '$InfosBrutes', '$Domicile')";
    //$sql = "INSERT INTO Consultant (idConsultant, NomPrenom, CDM, NombreDispoM0, NombreDispoM1, NombreDispoM2, Titre, ExperienceY, ExperienceM, InfosBrutes, Domicile)
    //VALUES ($idConsultant, '$NomPrenom', '$CDM', $NombreDispoM0, $NombreDispoM1, $NombreDispoM2, '$Titre', $ExperienceY, $ExperienceM, '$InfosBrutes', '$Domicile')";
    
    
    $retval = mysql_query( $sql, $conn );
    
    if(! $retval ) {
        die('Could not enter data: ' . mysql_error());
    }
    
    echo "Entered data successfully for consultant with Name =".$NomPrenom."\n";
    mysql_close($conn);
}


?>