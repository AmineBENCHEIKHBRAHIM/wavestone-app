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

<link href="stylesheets/toggle.css" rel="stylesheet" />

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Include material.io library -->
<link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
<script type="text/javascript" src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>




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

<!-- Draggable style of reorderable buttons -->

<style type="text/css">
* { box-sizing: border-box }
.box {
	display: -webkit-flex;
	display: flex;
	-webkit-flex-wrap: wrap;
	flex-wrap: wrap;
	width: 400px;
	padding: 0px;
	
}
.item {
	display: inline-block;
	margin: 6px;
	width: 120px;
	height: 120px;
	border: 1px solid #c4c4c4;
	box-shadow: 0 0 9px rgba(0, 0, 0, 0.13);
	line-height: 120px;
	text-align: center;
	font-size: 44px;
}
</style>

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
$french_months = array('Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Jui', 'Jui', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec');
?>

<div class="container">

<!--  

<button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>

<a type="button" class="btn btn-outline-warning waves-effect">Send <i class="fa fa-paper-plane-o ml-1"></i></a>

-->

<!-- Modal pop up design & HTML structure -->
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Ajouter une mission</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">           
            
                <div class="md-form mb-5" id="missionaddid">
                    <i class="fa fa-tag prefix grey-text"></i>
                    <input type="text" id="missionname" class="form-control validate" placeholder="Nom de mission" maxlength="100">
                    
                    <!--  <label data-error="wrong" data-success="right" for="form32">Nom de mission</label>-->
                </div>
                <input type="hidden" id="modelhiddenconsultantid" name="modelhiddenconsultantid" value="">
<!--  
<div class="md-form active-purple active-purple-2 mb-3">
    <input class="form-control" type="text" id="myInput" placeholder="Rechercher" aria-label="Rechercher">
</div>
-->
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        		<button type="button" class="btn btn-primary" data-dismiss="modal" onclick="missionAdd()">Ajouter</button>
            </div>
        </div>
    </div>
</div>

<!--  
<div class="text-center">
    <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Ajouter une mission</a>
</div>
-->


<br>
<!-- <p class="text-center">Dashboard global des consultants</p>-->
<!--  
<script type="text/javascript">
$(document).ready(function () {
	  $('#dtBasicExample').DataTable();
	  $('.dataTables_length').addClass('bs-select');
	});
</script>
-->
<!-- Search form -->
<div class="md-form active-purple active-purple-2 mb-3">
    <input class="form-control" type="text" id="myInput" placeholder="Rechercher" aria-label="Rechercher">
</div>

<table id="dtBasicExample" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
  <thead>
    <tr>
    <th class="th-sm" style="text-align:center">
    <div class="togglebutton">
                <label>
                  <input id="togglerefresh" type="checkbox" onclick="ShowHideConsultants()" checked>
                  <span class="toggle"></span>
                </label>
              </div>
        <!--  <i class="fa fa-sort float-right" aria-hidden="true"></i>-->
      </th>
      <th class="th-sm" style="text-align:center">Titre
        <!--  <i class="fa fa-sort float-right" aria-hidden="true"></i>-->
      </th>
      <th class="th-sm" style="text-align:center">Consultant
        <!--  <i class="fa fa-sort float-right" aria-hidden="true"></i>-->
      </th>
      <!--  
      <th class="th-sm" style="text-align:center">M1
        <!--  <i class="fa fa-sort float-right" aria-hidden="true"></i>-->
      <!-- </th>
      <th class="th-sm" style="text-align:center">M2
        <!--  <i class="fa fa-sort float-right" aria-hidden="true"></i>-->
      <!-- </th>
      <th class="th-sm" style="text-align:center">M3
        <!--  <i class="fa fa-sort float-right" aria-hidden="true"></i>-->
      <!-- </th>-->
        
      <th class="th-sm" style="text-align:center"><? echo str_replace($english_months, $french_months, date('F')); ?>
        <!-- <i class="fa fa-sort float-right" aria-hidden="true"></i>-->
      </th>
      <th class="th-sm" style="text-align:center"><? echo str_replace($english_months, $french_months, date('F', mktime(0, 0, 0, date('m')+1, 1))); ?>
        <!-- <i class="fa fa-sort float-right" aria-hidden="true"></i>-->
      </th>
      <th class="th-sm" style="text-align:center"><? echo str_replace($english_months, $french_months, date('F', mktime(0, 0, 0, date('m')+2, 1))); ?>
        <!-- <i class="fa fa-sort float-right" aria-hidden="true"></i>-->
      </th>
      
      <th class="th-sm" style="text-align:center">Pistes de mission
        <!--  <i class="fa fa-sort float-right" aria-hidden="true"></i>-->
      </th>
      <th class="th-sm" style="text-align:center">pXX
        <!--  <i class="fa fa-sort float-right" aria-hidden="true"></i>-->
      </th>
      
      <th class="th-sm" style="text-align:center">Action
        <!--  <i class="fa fa-sort float-right" aria-hidden="true"></i>-->
      </th>
    </tr>
  </thead>
  <tbody id="Consultantslist">




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

//Variable qui prend l'état du curseur global d'affichage



if (mysql_num_rows($result) > 0) {
while ($row = mysql_fetch_assoc($result)) {
    
    //id getting
    $idConsultant=intval($row['idConsultant']);
    $CDM=$row['CDM'];
    
    $NombreProdM0 = $row['NombreProdM0'];
    $NombreProdM1 = $row['NombreProdM1'];
    $NombreProdM2 = $row['NombreProdM2'];
    $NombreImprodM0 = $row['NombreImprodM0'];
    $NombreImprodM1 = $row['NombreImprodM1'];
    $NombreImprodM2 = $row['NombreImprodM2'];
    $NombreCongeM0 = $row['NombreCongeM0'];
    $NombreCongeM1 = $row['NombreCongeM1'];
    $NombreCongeM2 = $row['NombreCongeM2'];
    $NombreDispoM0 = $row['NombreDispoM0'];
    $NombreDispoM1 = $row['NombreDispoM1'];
    $NombreDispoM2 = $row['NombreDispoM2'];
    
    //Grade getting
    $grade='';
    if($row['Titre']=="Partner"){
        $grade="P";
    }else{
        if($row['Titre']=="SeniorManager"){
            $grade="SM";
        }else{
            if($row['Titre']=="Manager"){
                $grade="M";
            }else{
                if($row['Titre']=="SeniorConsultant"){
                    $grade="SC";
                }else{
                    if($row['Titre']=="Consultant"){
                        $grade="C";
                    }else{
                        $grade="A";
                    }
                }
            }
        }
    }
    
    "<td align=\"center\" width=\"2%\">".$dispoM0."</td>";
    
    //disponibility rate getting dispo M0
    $dispoM0='';
    if($row['NombreDispoM0']==0){
        //$dispoM0="0";
        $dispoM0="<select class=\"browser-default\" title=\"Prod:".$NombreProdM0.",Improd:".$NombreImprodM0.",Conge:".$NombreCongeM0.",Dispo:".$NombreDispoM0."\">
    <option value=\"0\" selected>0</option>
    <option value=\"1/5\">1/5</option>
    <option value=\"MT\">MT</option>
    <option value=\"4/5\">4/5</option>
    <option value=\"TP\">TP</option>
</select>";
    }else{
        if(intval($row['NombreDispoM0'])>0 && intval($row['NombreDispoM0'])<7){
            //$dispoM0="1/5";
            $dispoM0="<select class=\"browser-default\" title=\"Prod:".$NombreProdM0.",Improd:".$NombreImprodM0.",Conge:".$NombreCongeM0.",Dispo:".$NombreDispoM0."\">
    <option value=\"0\">0</option>
    <option value=\"1/5\" selected>1/5</option>
    <option value=\"MT\">MT</option>
    <option value=\"4/5\">4/5</option>
    <option value=\"TP\">TP</option>
</select>";
        }else{
            if(intval($row['NombreDispoM0'])>6 && intval($row['NombreDispoM0'])<14){
                //$dispoM0="MT";
                $dispoM0="<select class=\"browser-default\" title=\"Prod:".$NombreProdM0.",Improd:".$NombreImprodM0.",Conge:".$NombreCongeM0.",Dispo:".$NombreDispoM0."\">
    <option value=\"0\">0</option>
    <option value=\"1/5\">1/5</option>
    <option value=\"MT\" selected>MT</option>
    <option value=\"4/5\">4/5</option>
    <option value=\"TP\">TP</option>
</select>";
            }else{
                if(intval($row['NombreDispoM0'])>13 && intval($row['NombreDispoM0'])<18){
                    //$dispoM0="4/5";
                    $dispoM0="<select class=\"browser-default\" title=\"Prod:".$NombreProdM0.",Improd:".$NombreImprodM0.",Conge:".$NombreCongeM0.",Dispo:".$NombreDispoM0."\">
    <option value=\"0\">0</option>
    <option value=\"1/5\">1/5</option>
    <option value=\"MT\">MT</option>
    <option value=\"4/5\" selected>4/5</option>
    <option value=\"TP\">TP</option>
</select>";
                }else{
                    if(intval($row['NombreDispoM0'])>17 && intval($row['NombreDispoM0'])<24){
                        //$dispoM0="TP";
                        $dispoM0="<select class=\"browser-default\" title=\"Prod:".$NombreProdM0.",Improd:".$NombreImprodM0.",Conge:".$NombreCongeM0.",Dispo:".$NombreDispoM0."\">
    <option value=\"0\">0</option>
    <option value=\"1/5\">1/5</option>
    <option value=\"MT\">MT</option>
    <option value=\"4/5\">4/5</option>
    <option value=\"TP\" selected>TP</option>
</select>";
                    }else{
                        //$dispoM0="0";
                        $dispoM0="<select class=\"browser-default\" title=\"Prod:".$NombreProdM0.",Improd:".$NombreImprodM0.",Conge:".$NombreCongeM0.",Dispo:".$NombreDispoM0."\">
    <option value=\"0\" selected>0</option>
    <option value=\"1/5\">1/5</option>
    <option value=\"MT\">MT</option>
    <option value=\"4/5\">4/5</option>
    <option value=\"TP\">TP</option>
</select>";
                    }
                }
            }
        }
    }
    
    //disponibility rate getting dispo M1
    
    $dispoM1='';
    if($row['NombreDispoM1']==0){
        //$dispoM1="0";
        $dispoM1="<select class=\"browser-default\" title=\"Prod:".$NombreProdM1.",Improd:".$NombreImprodM1.",Conge:".$NombreCongeM1.",Dispo:".$NombreDispoM1."\">
    <option value=\"0\" selected>0</option>
    <option value=\"1/5\">1/5</option>
    <option value=\"MT\">MT</option>
    <option value=\"4/5\">4/5</option>
    <option value=\"TP\">TP</option>
</select>";
    }else{
        if(intval($row['NombreDispoM1'])>0 && intval($row['NombreDispoM1'])<7){
            //$dispoM1="1/5";
            $dispoM1="<select class=\"browser-default\" title=\"Prod:".$NombreProdM1.",Improd:".$NombreImprodM1.",Conge:".$NombreCongeM1.",Dispo:".$NombreDispoM1."\">
    <option value=\"0\">0</option>
    <option value=\"1/5\" selected>1/5</option>
    <option value=\"MT\">MT</option>
    <option value=\"4/5\">4/5</option>
    <option value=\"TP\">TP</option>
</select>";
        }else{
            if(intval($row['NombreDispoM1'])>6 && intval($row['NombreDispoM1'])<14){
                //$dispoM1="MT";
                $dispoM1="<select class=\"browser-default\" title=\"Prod:".$NombreProdM1.",Improd:".$NombreImprodM1.",Conge:".$NombreCongeM1.",Dispo:".$NombreDispoM1."\">
    <option value=\"0\">0</option>
    <option value=\"1/5\">1/5</option>
    <option value=\"MT\" selected>MT</option>
    <option value=\"4/5\">4/5</option>
    <option value=\"TP\">TP</option>
</select>";
            }else{
                if(intval($row['NombreDispoM1'])>13 && intval($row['NombreDispoM1'])<18){
                    //$dispoM1="4/5";
                    $dispoM1="<select class=\"browser-default\" title=\"Prod:".$NombreProdM1.",Improd:".$NombreImprodM1.",Conge:".$NombreCongeM1.",Dispo:".$NombreDispoM1."\">
    <option value=\"0\">0</option>
    <option value=\"1/5\">1/5</option>
    <option value=\"MT\">MT</option>
    <option value=\"4/5\" selected>4/5</option>
    <option value=\"TP\">TP</option>
</select>";
                }else{
                    if(intval($row['NombreDispoM1'])>17 && intval($row['NombreDispoM1'])<24){
                        //$dispoM1="TP";
                        $dispoM1="<select class=\"browser-default\" title=\"Prod:".$NombreProdM1.",Improd:".$NombreImprodM1.",Conge:".$NombreCongeM1.",Dispo:".$NombreDispoM1."\">
    <option value=\"0\">0</option>
    <option value=\"1/5\">1/5</option>
    <option value=\"MT\">MT</option>
    <option value=\"4/5\">4/5</option>
    <option value=\"TP\" selected>TP</option>
</select>";
                    }else{
                        //$dispoM1="0";
                        $dispoM1="<select class=\"browser-default\" title=\"Prod:".$NombreProdM1.",Improd:".$NombreImprodM1.",Conge:".$NombreCongeM1.",Dispo:".$NombreDispoM1."\">
    <option value=\"0\" selected>0</option>
    <option value=\"1/5\">1/5</option>
    <option value=\"MT\">MT</option>
    <option value=\"4/5\">4/5</option>
    <option value=\"TP\">TP</option>
</select>";
                    }
                }
            }
        }
    }
    
    //disponibility rate getting dispo M2
    $dispoM2='';
    if($row['NombreDispoM2']==0){
        //$dispoM2="0";
        $dispoM2="<select class=\"browser-default\" title=\"Prod:".$NombreProdM2.",Improd:".$NombreImprodM2.",Conge:".$NombreCongeM2.",Dispo:".$NombreDispoM2."\">
    <option value=\"0\" selected>0</option>
    <option value=\"1/5\">1/5</option>
    <option value=\"MT\">MT</option>
    <option value=\"4/5\">4/5</option>
    <option value=\"TP\">TP</option>
</select>";
    }else{
        if(intval($row['NombreDispoM2'])>0 && intval($row['NombreDispoM2'])<7){
            //$dispoM2="1/5";
            $dispoM2="<select class=\"browser-default\" title=\"Prod:".$NombreProdM2.",Improd:".$NombreImprodM2.",Conge:".$NombreCongeM2.",Dispo:".$NombreDispoM2."\">
    <option value=\"0\">0</option>
    <option value=\"1/5\" selected>1/5</option>
    <option value=\"MT\">MT</option>
    <option value=\"4/5\">4/5</option>
    <option value=\"TP\">TP</option>
</select>";
        }else{
            if(intval($row['NombreDispoM2'])>6 && intval($row['NombreDispoM2'])<14){
                //$dispoM2="MT";
                $dispoM2="<select class=\"browser-default\" title=\"Prod:".$NombreProdM2.",Improd:".$NombreImprodM2.",Conge:".$NombreCongeM2.",Dispo:".$NombreDispoM2."\">
    <option value=\"0\">0</option>
    <option value=\"1/5\">1/5</option>
    <option value=\"MT\" selected>MT</option>
    <option value=\"4/5\">4/5</option>
    <option value=\"TP\">TP</option>
</select>";
            }else{
                if(intval($row['NombreDispoM2'])>13 && intval($row['NombreDispoM2'])<18){
                    //$dispoM2="4/5";
                    $dispoM2="<select class=\"browser-default\" title=\"Prod:".$NombreProdM2.",Improd:".$NombreImprodM2.",Conge:".$NombreCongeM2.",Dispo:".$NombreDispoM2."\">
    <option value=\"0\">0</option>
    <option value=\"1/5\">1/5</option>
    <option value=\"MT\">MT</option>
    <option value=\"4/5\" selected>4/5</option>
    <option value=\"TP\">TP</option>
</select>";
                }else{
                    if(intval($row['NombreDispoM2'])>17 && intval($row['NombreDispoM2'])<24){
                        //$dispoM2="TP";
                        $dispoM2="<select class=\"browser-default\" title=\"Prod:".$NombreProdM2.",Improd:".$NombreImprodM2.",Conge:".$NombreCongeM2.",Dispo:".$NombreDispoM2."\">
    <option value=\"0\">0</option>
    <option value=\"1/5\">1/5</option>
    <option value=\"MT\">MT</option>
    <option value=\"4/5\">4/5</option>
    <option value=\"TP\" selected>TP</option>
</select>";
                    }else{
                        //$dispoM2="0";
                        $dispoM2="<select class=\"browser-default\" title=\"Prod:".$NombreProdM2.",Improd:".$NombreImprodM2.",Conge:".$NombreCongeM2.",Dispo:".$NombreDispoM2."\">
    <option value=\"0\" selected>0</option>
    <option value=\"1/5\">1/5</option>
    <option value=\"MT\">MT</option>
    <option value=\"4/5\">4/5</option>
    <option value=\"TP\">TP</option>
</select>";
                    }
                }
            }
        }
    }
    
    
  
    
    $switch ="<div class=\"togglebutton\">
                <label>
                  <input class =\"vistoggle\" name=\"vistoggle\" id=\"check".$idConsultant."\" type=\"checkbox\" onclick=\"ToggleConsultant('".$idConsultant."')\" checked>
                  <span class=\"toggle\"></span>
                </label>
              </div>";
    echo"<tr class=\"Consultanttr\" id=".$idConsultant."><td align=\"center\" width=\"2%\">".$switch."</td>";
    echo"<td align=\"center\" width=\"2%\">".$grade."</td>";
    echo"<td align=\"center\" width=\"19%\">".$row['NomPrenom']."</td>";
    echo"<td align=\"center\" width=\"2%\">".$dispoM0."</td>";
    echo"<td align=\"center\" width=\"2%\">".$dispoM1."</td>";
    echo"<td align=\"center\" width=\"2%\">".$dispoM2."</td>";
    //echo"<td>".$row['Titre']."</td>";
    //echo"<td>".$row['ExperienceY']." ans et ".$row['ExperienceM']." Mois </td>";
    // Add missions consultant have workded with + Buttton to add them on the fly. may be a div with a specific name that can be modified with an ajax request.
    // For missions add : specify title, Pressenti, adding date  + pressenti : code couleur : Ferme : vert foncé , Solide (bonne proba) : Vert moyen , Challenging : Pastel 
    // Ajouter partie : afficher ou ne pas afficher :// 
    
    // Add filtering capacity at the end // Champ libre : Critères : Expérience, Grade, dispo, compétence (Infra Cloud, Digital Platform, Business transformation, Core IA 
    
    //rendre les colonnes modifiables directement
    
    //echo"<td>".$row['Domicile']."</td></tr>";
    $sortable="<div class=\"box grabbable-parent\" id=\"missions".$idConsultant."\">
    <button type=\"button\" class=\"btn btn-light-green\" onclick=\"toggleButton(this)\" id=\"mission1".$idConsultant."\" title=\"Piste1\" onmouseenter=\"Showclosebutton('close1".$idConsultant."')\" onmouseleave=\"Hideclosebutton('close1".$idConsultant."')\">Piste1 <i class=\"fa fa-remove\" aria-hidden=\"true\" style=\"display:none\" id=\"close1".$idConsultant."\" onmousedown=\"WhichButton(event,'mission1".$idConsultant."')\"></i></button>
    <button type=\"button\" class=\"btn btn-purple\" onclick=\"toggleButton(this)\"  id=\"mission2".$idConsultant."\" title=\"Piste2\" onmouseenter=\"Showclosebutton('close2".$idConsultant."')\" onmouseleave=\"Hideclosebutton('close2".$idConsultant."')\">Piste2 <i class=\"fa fa-remove\" aria-hidden=\"true\" style=\"display:none\" id=\"close2".$idConsultant."\" onmousedown=\"WhichButton(event,'mission2".$idConsultant."')\"></i></button>
    <button type=\"button\" class=\"btn btn-outline-secondary waves-effect\" onclick=\"toggleButton(this)\"  id=\"mission3".$idConsultant."\" title=\"Piste3\" onmouseenter=\"Showclosebutton('close3".$idConsultant."')\" onmouseleave=\"Hideclosebutton('close3".$idConsultant."')\">Piste3 <i class=\"fa fa-remove\" aria-hidden=\"true\" style=\"display:none\" id=\"close3".$idConsultant."\" onmousedown=\"WhichButton(event,'mission3".$idConsultant."')\"></i></button>
</div>";
    
    echo"<td align=\"center\" width=\"50%\">".$sortable."</td>";
    
    echo"<td align=\"center\" width=\"2%\">".$CDM."</td>";
    
    $action_panel="<button class=\"mdc-fab\" aria-label=\"Add\" data-toggle=\"modal\" data-target=\"#modalLoginForm\" data-id=".$idConsultant.">
  <span class=\"material-icons mdc-fab__icon mdc-fab--mini\">add</span>
</button>";
    echo"<td align=\"center\" width=\"19%\">".$action_panel."</td></tr>";
}

/*
 * onclick=\"missionAdd(".$idConsultant.")\" id=\"add".$idConsultant."\"
 * 
 */

}else{
    echo "No consultants to show";
}

?>
      
        
    </tbody>
</table>



</div>



<script>
var toggle_state = 1;
//to finalise
function ShowHideConsultants() {

	if(toggle_state == 0){
		toggle_state = 1;
		console.log("toggle state = "+toggle_state)
		//$("#Consultantslist tr").hide();


		    $("#Consultantslist tr").has(".vistoggle:not(:checked)").hide();
			console.log("new implementation of hide function done");
		
		//if($("#Consultantslist tr input[name=vistoggle]").is(':checked')){
			//$("#Consultantslist tr").show();
			//$(this).show();
		//}else{
			//$("#Consultantslist tr").hide();
			//$(this).hide();
		//}
  //var checkboxes = document.getElementsByName('vistoggle');
  //var checkboxesChecked = [];
  // loop over them all
  //for (var i=0; i<checkboxes.length; i++) {
     // And stick the checked ones onto an array...
    // if (checkboxes[i].checked) {
        //checkboxesChecked.push(checkboxes[i]);
         //checkboxes[i].show();
      //   checkboxes[i].style.display = 'block';

     //}else{
    	 //checkboxes[i].hide();
         // hide the lorem ipsum text
        // checkboxes[i].style.display = 'none';
     //}
  //}




		//alert("toggle state = "+toggle_state)
	}else{
		toggle_state = 0;
	    $("#Consultantslist tr").show();
		console.log("toggle state = "+toggle_state)
	}
	//$("#Consultantslist tr").filter(function() {
	  //    $(this).toggle(true)
	    //});
	//alert(showall);

	//var x = document.querySelectorAll(".consultanttr");
	//var i;
	//for (i = 0; i < x.length; i++) {
	  //  x[i].show();
	//}

}
</script>


<script>
function ToggleConsultant(id) {

	if(toggle_state == 1){

	//alert("id="+id);
	var jsid = "#check".concat(id);
	//alert("jsid="+jsid);
	var trcons = document.getElementById(jsid);

	var trid = "#".concat(id);
	//trid = trid.concat(id);
	//alert("trid="+trid);
	if(jsid.checked == true){
		$(trid).show();
		$(jsid).prop('checked', true);
		//alert("shown");
		}else{
			//setTimeout(1000);
			$(jsid).removeAttr('checked');
			$(trid).hide();
			console.log(trid+"unchecked");
		}

	}
	
	//alert("You pressed button: " + event.button);
	//if(event.button=='2'){		
    //window.alert(id);
	//}
}
</script>


<script>
function Hideclosebutton(id) {
	//alert(id);
	var missionidclose = "#".concat(id);
	$(missionidclose).hide();
	
	//alert("You pressed button: " + event.button);
	//if(event.button=='2'){		
    //window.alert(id);
	//}
}
</script>


<script>
function Showclosebutton(id) {
	//alert(id);
	var missionidclose = "#".concat(id);
	$(missionidclose).show();
	
	//alert("You pressed button: " + event.button);
	//if(event.button=='2'){		
    //window.alert(id);
	//}
}
</script>

<script>
function WhichButton(event,id) {
	//alert(id);
	var missionid = "#".concat(id);
	if(event.button==0){
		$(missionid).remove();
	}
	
	//alert("You pressed button: " + event.button);
	//if(event.button=='2'){		
    //window.alert(id);
	//}
}
</script>


<script type="text/javascript" src="js/grabbable.js"></script>
<script type="text/javascript">
"use strict";
!function(){
	var x = document.querySelectorAll(".grabbable-parent");
	var i;
	for (i = 0; i < x.length; i++) {
	    x[i].grabbable();
	}

}()
</script>

<!-- Pass parameter to modal script -->
<script>
$(document).on("click",".mdc-fab",function(){
	var myBookId = $(this).data('id');
	//window.alert(myBookId);
	$("#modelhiddenconsultantid").val(myBookId);
	//$(".modal-body mx-3 #modelhiddenconsultantid").val(myBookId);
});
</script>

<!-- Button class toggle function -->
<script>


function toggleButton(element) {
	if(element.className == "btn btn-light-green"){
		//window.alert("btn btn-dark-green");
		//$(this).toggleClass('btn btn-primary');
		element.className = "btn btn-purple";
	}else{
		if(element.className == "btn btn-purple"){
			//window.alert("btn btn-primary");
			//$(this).toggleClass('btn btn-yellow');
			element.className = "btn btn-outline-secondary waves-effect";
		}else{
			if(element.className == "btn btn-outline-secondary waves-effect"){
				//window.alert("btn btn-yellow");
				//$(this).toggleClass('btn btn-dark-green');
				element.className = "btn btn-light-green";
			}
		}
	}
	
	};

</script>



<!-- Missions add script -->
<script>
function missionAdd(){
	//window.alert("missions".concat(idConsultant));
	
	var idConsultant = document.getElementById("modelhiddenconsultantid").value;
	var missionname = document.getElementById("missionname").value;

	var missionnameshort=missionname.substring(0,6);
	//window.alert(idConsultant);
	//window.alert(missionname);

	
	var missionsid = "#missions".concat(idConsultant);
	//var temp = "<button type=\"button\" class=\"btn btn-light-green\" onclick=\"toggleButton(this)\">".concat(missionname);
	//<button type=\"button\" class=\"btn btn-light-green\" onclick=\"toggleButton(this)\" id=\"mission1".$idConsultant."\" onmouseenter=\"Showclosebutton('close1".$idConsultant."')\" onmouseleave=\"Hideclosebutton('close1".$idConsultant."')\">Piste1 <i class=\"fa fa-remove\" aria-hidden=\"true\" style=\"display:none\" id=\"close1".$idConsultant."\" onmousedown=\"WhichButton(event,'mission1".$idConsultant."')\"></i></button>
	var temp = "<button type=\"button\" class=\"btn btn-light-green\" onclick=\"toggleButton(this)\" id=\"mission4".concat(idConsultant);
	temp=temp.concat('" ');
	temp=temp.concat("title=\"");
	temp=temp.concat(missionname);
	temp=temp.concat("\" ");
	temp=temp.concat("onmouseenter=\"Showclosebutton('close4");
	temp=temp.concat(idConsultant);
	temp=temp.concat("')\"");
	temp=temp.concat(" ");
	temp=temp.concat("onmouseleave=\"Hideclosebutton('close4");
	temp=temp.concat(idConsultant);
	temp=temp.concat("')\"");
	temp=temp.concat(">");
	temp=temp.concat(missionnameshort);
	temp=temp.concat(" ");
	temp=temp.concat("<i class=\"fa fa-remove\" aria-hidden=\"true\" style=\"display:none\" ");
	temp=temp.concat("id=\"close4");
	temp=temp.concat(idConsultant);
	temp=temp.concat("\" ");
	temp=temp.concat("onmousedown=\"WhichButton(event,'mission4");
	temp=temp.concat(idConsultant);
	temp=temp.concat("')\"></i>");

	//<i class=\"fa fa-remove\" aria-hidden=\"true\" style=\"display:none\" id=\"close1".$idConsultant."\" onmousedown=\"WhichButton(event,'mission1".$idConsultant."')\"></i>
	//<button type=\"button\" class=\"btn btn-light-green\" onmouseleave=\"Hideclosebutton('close1".$idConsultant."')\">Piste1 <i class=\"fa fa-remove\" aria-hidden=\"true\" style=\"display:none\" id=\"close1".$idConsultant."\" onmousedown=\"WhichButton(event,'mission1".$idConsultant."')\"></i></button>
	temp=temp.concat("</button>");
	$(missionsid).append(temp);
	//$(missionsid).append("<button type=\"button\" class=\"btn btn-danger\">Piste X</button>");
	//document.getElementByID("missions".concat(idConsultant)).append("<button type=\"button\" class=\"btn btn-danger\">Piste X</button>");
	var x = document.querySelectorAll(".grabbable-parent");
	var i;
	for (i = 0; i < x.length; i++) {
	    x[i].grabbable();
	}
	
}
</script>



<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#Consultantslist tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>
