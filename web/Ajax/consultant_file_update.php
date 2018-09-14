<?php 

//print_r($_POST);
$idConsultant = NULL;
$NomPrenom = '';
$CDM = '';
$NombreDispoM0 = NULL;
$NombreDispoM1 = NULL;
$NombreDispoM2 = NULL;
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

if(isset($_POST['NombreDispoM0']) && $_POST['NombreDispoM0']!='' && $_POST['NombreDispoM0']!='undefined'){
    $NombreDispoM0 = intval($_POST['NombreDispoM0']);
}

if(isset($_POST['NombreDispoM1']) && $_POST['NombreDispoM1']!='' && $_POST['NombreDispoM1']!='undefined'){
    $NombreDispoM1 = intval($_POST['NombreDispoM1']);
}

if(isset($_POST['NombreDispoM2']) && $_POST['NombreDispoM2']!='' && $_POST['NombreDispoM2']!='undefined'){
    $NombreDispoM2 = intval($_POST['NombreDispoM2']);
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
/*
echo "values to be inserted : ";
echo $idConsultant;
echo $NomPrenom;
echo $CDM;
echo $NombreDispoM0;
echo $NombreDispoM1;
echo $NombreDispoM2;
echo $Titre;
echo $ExperienceY;
echo $ExperienceM;
echo $InfosBrutes;
echo $Domicile;
*/

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

//$sql = "SELECT * FROM Consultant WHERE idConsultant='$idConsultant'";
//$result = mysql_query($conn, $sql);
$result = mysql_query("SELECT * FROM Consultant WHERE idConsultant=".$idConsultant.";");
if (mysql_num_rows($result) > 0) {
    $id=0;
    // output data of each row
    while($row = mysql_fetch_assoc($result)) {
        $id=$row["idConsultant"];
        //echo "iddddddddddddddddddddddddddddddddddddddd=";echo $id;
    }
    
    //$sql = "UPDATE Consultant SET lastname='Doe' WHERE id=2";
    $sql2 = "UPDATE Consultant SET NomPrenom='".$NomPrenom."', CDM='".$CDM."', NombreDispoM0=".$NombreDispoM0.", NombreDispoM1=".$NombreDispoM1.", NombreDispoM2=".$NombreDispoM2.", Titre='".$Titre."', ExperienceY=".$ExperienceY.", ExperienceM=".$ExperienceM.", InfosBrutes='".$InfosBrutes."', Domicile='".$Domicile."' WHERE idConsultant=".$id.";";
    
    if (mysql_query($sql2)) {
        echo "Record updated successfully for consultant with id=".$id."\n";
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
    $sql = "INSERT INTO Consultant (idConsultant, NomPrenom, CDM, NombreDispoM0, NombreDispoM1, NombreDispoM2, Titre, ExperienceY, ExperienceM, InfosBrutes, Domicile)
    VALUES ($idConsultant, '$NomPrenom', '$CDM', $NombreDispoM0, $NombreDispoM1, $NombreDispoM2, '$Titre', $ExperienceY, $ExperienceM, '$InfosBrutes', '$Domicile')";
    
    $retval = mysql_query( $sql, $conn );
    
    if(! $retval ) {
        die('Could not enter data: ' . mysql_error());
    }
    
    echo "Entered data successfully for consultant with id=".$idConsultant."\n";
    mysql_close($conn);
}











?>