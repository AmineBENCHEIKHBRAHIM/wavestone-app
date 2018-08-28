<form action="/controllers/action_upload.php" method="POST" enctype="multipart/form-data">
    <div>
    	<label for="upload">Sélectionnez les fichiers :</label> 
    	<input id="upload" type="file" name="upload[]" multiple="multiple">
    </div>
    
    <p><input type="submit" name="submit" value="Upload">
</form>