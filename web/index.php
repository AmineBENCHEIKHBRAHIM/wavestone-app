<?php 




//echo 'Hello, World!'; echo 'from second pc';

/*if (strpos(getenv('SERVER_SOFTWARE'), 'Development') === 0){
    echo 'Local development server';
} else {
    echo 'Production';
}
*/
/*
 Connect to Cloud SQL
 Usage: Update the connection string with your connection information
 -Replace "project_id" with the Project ID of your Cloud SQL Project
 -Replace "demo-db" with the name of your instance in Cloud SQL
 -Replace "root" with your user name
 */

/*
$conn = mysql_connect(getenv('MYSQL_DB'), getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'));
if (!$conn) {
    die('Connect Error (' . mysql__error());
}
//Select Database
$db_selected = mysql_select_db('guestbook', $conn);
if (!$db_selected) {
    die ('Can\'t use db : ' . mysql_error());
}
//Perform Query
$result = mysql_query("SELECT * FROM entries;");
//Show Results
echo "<!doctype html>";
echo "<body>";
echo "<h3>Results from Google Cloud SQL</h3>";
echo "<table class=simpletable border=1>";
echo "<tr><th align=left>Star Name</th><th>(x) times larger than the Sun</th></tr>";
while ($row = mysql_fetch_assoc($result)) {
    echo "<tr><td align=left>" . $row['guestName'] . "</td>";
    echo "<td align=center class=addCommas>" . $row['content'] . "</td></tr>";
}
echo "</table>";
*/
?>





<!-- Style the results table -->
<!--  
<style type="text/css">
h3 {font-family:verdana;font-size:24px;color:#181C26;}
table.simpletable {font-family:verdana;font-size:15px;color:#40434A;border-width:1px;border-color:#778AB8;border-collapse:collapse;}
table.simpletable th {border-width: 1px;padding: 10px;border-style: solid;border-color:#778AB8;background-color:#dedede;}
table.simpletable td {border-width: 1px;padding: 10px;border-style: solid;border-color: #778AB8;background-color: #ffffff;}
</style>
-->
<!-- Add commas to numbers appearing in the table cell with the attribute 'class=addCommas'-->
<!--  
<script type="text/javascript">
function formatNumberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
var elements = document.querySelectorAll('td.addCommas');
var i;
for (i in elements) {
   if(elements[i].innerHTML != undefined) {
         elements[i].innerHTML = formatNumberWithCommas(elements[i].innerHTML);
   }
}
</script>
-->

<html>
<head>
	<meta charset="utf-8">
	<title>Input from UI Design</title>
	<link type="text/css" rel="stylesheet" href="/stylesheets/style.css">
</head>
<body>
	<div class="box">
		<h2>Login</h2>
		<form>
			<div class="inputBox">
				<input type="text" name="" required="">
				<label>Username</label>
			</div>
			<div class="inputBox">
				<input type="password" name="" required="">
				<label>Password</label>
			</div>
			<input type="submit" name="" value="submit">
		</form>
	</div>
</body>
</html>