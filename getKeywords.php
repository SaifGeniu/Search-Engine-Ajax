<?php
mysql_connect("localhost", "username", "password") or die(musql_error());
mysql_select_db("tablename") or die(mysql_error());

$patialKeywords = $_POST['partialKeywords'];

$keywords = mysql_query("SELECT keytwords FROM data WHERE keywords LIKE '%$partialKeyword%'")
while($keywordsArray = mysql_fetch_array($keywords)) {
	
	echo "<div>".$keywords['keywords']."</div>
}

?>