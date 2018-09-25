<html>
<head>
	<meta charset="UTF-8">
<!--  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

-->

<!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/css/mdb.min.css" rel="stylesheet">

<!--  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/css/addons/datatables.min.css" rel="stylesheet">-->
<!-- MDBootstrap Datatables  -->
<link href="stylesheets/datatables.min.css" rel="stylesheet">



<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/js/mdb.min.js"></script>

<!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="js/datatables.min.js"></script>


</head>
<body>



<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark purple darken-4">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">Menu</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="dashboard.php">Dashboard
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="upload.php">Upload</a>
            </li>

            <!-- Dropdown -->
            <!--  
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            -->
        </ul>

			<span class="navbar-text white-text">
            Administrator
        	</span>
        
        <!-- Links -->
<!--  
        <form class="form-inline">
            <div class="md-form my-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
        </form>
-->
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->









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

<div class="container">



<br>
<p class="text-center">Global Dashboard of available consultants</p>

<script type="text/javascript">
$(document).ready(function () {
	  $('#dtBasicExample').DataTable({
		  "ordering": false});
	  $('.dataTables_length').addClass('bs-select');
	});
</script>

<!-- Search form -->
<div class="md-form active-purple active-purple-2 mb-3">
    <input class="form-control" type="text" placeholder="Search" aria-label="Search">
</div>

<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Grade
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm">Consultant
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm"><? echo str_replace($english_months, $french_months, date('F')); ?>
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm"><? echo str_replace($english_months, $french_months, date('F', mktime(0, 0, 0, date('m')+1, 1))); ?>
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm"><? echo str_replace($english_months, $french_months, date('F', mktime(0, 0, 0, date('m')+2, 1))); ?>
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm">Pistes de mission
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
    </tr>
  </thead>
  <tbody>




<!-- 
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
 -->

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



</div>



</body>
</html>
