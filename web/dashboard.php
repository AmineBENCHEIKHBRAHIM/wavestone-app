<html>
<head>
	<meta charset="UTF-8">
<!--  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

-->
</head>
<body>

<!--  
<script type="text/javascript">

$(document).ready( function () {
    $('#table_id').DataTable();
} );

</script>
-->
<?php 
$english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
$french_months = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
?>



<h3>Global Dashboard of available consultants</h3>

<table id="table_id" class="display">
    <thead>
        <tr>
            <th align="center" width="12%">Grade</th>
            <th align="center" width="20%">Consultant</th>
            <th align="center" width="12%">Dispo <? echo str_replace($english_months, $french_months, date('F')); ?></th>
            <th align="center" width="12%">Dispo <? echo str_replace($english_months, $french_months, date('F', mktime(0, 0, 0, date('m')+1, 1))); ?></th>
            <th align="center" width="12%">Dispo <? echo str_replace($english_months, $french_months, date('F', mktime(0, 0, 0, date('m')+2, 1))); ?></th>
			<th align="center" width="32%">Pistes de mission</th>
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
$result = mysql_query("SELECT * FROM Consultant ORDER BY case when Titre = 'Partner' then 6 when Titre = 'SeniorManager' then 5 when Titre = 'Manager' then 4 when Titre = 'SeniorConsultant' then 3 when Titre = 'Consultant' then 2 when Titre = 'Analyst' then 1 else 0 end DESC, NombreDispoM0 DESC, NombreDispoM1 DESC, NombreDispoM2 DESC;"); 
// this query should be reviewed in order to get proper tri and filtering :
// Per default : Grade first then Dispo M, Dispo M+1, Dispo M+2 

// Nouveau affichage devient : Grade, Nom, Dispo +, Dispo M+1, Dispo M+2 , Pistes 

// Pour l'affichage de dispo : en 5 paliers + couleurs :
//TP : Rouge
//4/5 : Orange
//2/5 : 
//1/5 : Jaune
//0 : Vert



//Partie recherche : 



if (mysql_num_rows($result) > 0) {
while ($row = mysql_fetch_assoc($result)) {
    echo"<tr><td align=\"center\" width=\"12%\">".$row['Titre']."</td>";
    echo"<td align=\"center\" width=\"20%\">".$row['NomPrenom']."</td>";
    echo"<td align=\"center\" width=\"12%\">".$row['NombreDispoM0']."</td>";
    echo"<td align=\"center\" width=\"12%\">".$row['NombreDispoM1']."</td>";
    echo"<td align=\"center\" width=\"12%\">".$row['NombreDispoM2']."</td>";
    //echo"<td>".$row['Titre']."</td>";
    //echo"<td>".$row['ExperienceY']." ans et ".$row['ExperienceM']." Mois </td>";
    // Add missions consultant have workded with + Buttton to add them on the fly. may be a div with a specific name that can be modified with an ajax request.
    // For missions add : specify title, Pressenti, adding date  + pressenti : code couleur : Ferme : vert foncé , Solide (bonne proba) : Vert moyen , Challenging : Pastel 
    // Ajouter partie : afficher ou ne pas afficher :// 
    
    // Add filtering capacity at the end // Champ libre : Critères : Expérience, Grade, dispo, compétence (Infra Cloud, Digital Platform, Business transformation, Core IA 
    
    //rendre les colonnes modifiables directement
    
    
    //echo"<td>".$row['Domicile']."</td></tr>";
    echo"<td align=\"center\" width=\"32%\"></td></tr>";
    
}


}else{
    echo "No consultants to show";
}

?>
      
        
    </tbody>
</table>

</body>
</html>
