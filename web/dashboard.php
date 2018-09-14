<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>


</head>
<body>

<script type="text/javascript">

$(document).ready( function () {
    $('#table_id').DataTable();
} );

</script>

<h3>Results from Available Consultants</h3>

<table id="table_id" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>Consultant</th>
            <th>CDM</th>
            <th>Jours de dispo Septembre</th>
            <th>Jours de dispo Octobre</th>
            <th>Jours de dispo Novembre</th>
            <th>Titre</th>
            <th>Experience</th>
            <th>Domicile</th>
        </tr>
    </thead>
    <tbody>


<?php 

$conn = mysql_connect(getenv('MYSQL_DB'), getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'));
if (!$conn) {
    die('Connect Error (' . mysql__error());
}
//Select Database
$db_selected = mysql_select_db('wavestone-app', $conn);
if (!$db_selected) {
    die ('Can\'t use db : ' . mysql_error());
}

//Perform Query
$result = mysql_query("SELECT * FROM Consultant;");

if (mysql_num_rows($result) > 0) {
while ($row = mysql_fetch_assoc($result)) {
    echo"<tr><td>".$row['idConsultant']."</td>";
    echo"<td>".$row['NomPrenom']."</td>";
    echo"<td>".$row['CDM']."</td>";
    echo"<td>".$row['NombreDispoM0']."</td>";
    echo"<td>".$row['NombreDispoM1']."</td>";
    echo"<td>".$row['NombreDispoM2']."</td>";
    echo"<td>".$row['Titre']."</td>";
    echo"<td>".$row['ExperienceY']." ans et ".$row['ExperienceM']." Mois </td>";
    echo"<td>".$row['Domicile']."</td></tr>";
    
}


}else{
    echo "No consultants to show";
}

?>
      
        
    </tbody>
</table>

</body>
</html>
