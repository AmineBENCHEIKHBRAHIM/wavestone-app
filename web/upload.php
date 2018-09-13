<html>
<head>
<script lang="javascript" src="dist/xlsx.full.min.js"></script>
<script src="js/xlsx.full.min.js"></script>
</head>


<body>
<form id="file-catcher" action="/controllers/action_upload.php" method="POST" enctype="multipart/form-data">
    <div>
    	<label for="upload">Sélectionnez les fichiers :</label> 
    	<input id="file-input" type="file" name="upload[]" multiple="multiple">
    </div>
    
    <p><input type="submit" name="submit" value="Upload">
</form>

<div id="file-list-display"></div>
<div id="upload-response"></div>

<script src="js/upload.js"></script>

</body>
</html>