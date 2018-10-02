<html>
<head>
<script lang="javascript" src="dist/xlsx.full.min.js"></script>
<script src="js/xlsx.full.min.js"></script>


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
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">Dashboard
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="upload.php">Upload
                <span class="sr-only">(current)</span>
                </a>
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


<br>


<!-- Default form login -->
<form id="file-catcher" action="/controllers/action_upload.php" method="POST" enctype="multipart/form-data class="text-center border border-light p-5">

    <p class="h4 mb-4">Upload</p>


	<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
  <div class="custom-file">
    <input id="file-input" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="upload[]" multiple="multiple">
    <label class="custom-file-label" for="inputGroupFile01">Sélectionnez les fichiers :</label>
  </div>
</div>

    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" type="submit" name="submit" >Upload</button>





</form>
<!-- Default form login -->




<!-- 


<form id="file-catcher" action="/controllers/action_upload.php" method="POST" enctype="multipart/form-data">
    <div>
    	<label for="upload">Sélectionnez les fichiers :</label> 
    	<input id="file-input" type="file" name="upload[]" multiple="multiple">
    </div>
    
    <p><input type="submit" name="submit" value="Upload">
</form>
 -->
 
 
<div id="file-list-display"></div>
<div id="upload-response"></div>

<script src="js/upload.js"></script>
</body>
</html>