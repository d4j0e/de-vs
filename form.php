<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<title>VS Database</title>
	<meta name="description" content="Kurzbeschreibung">
	<link href="design.css" rel="stylesheet">
</head>

<body>

<form action="auslesen.php" method="post">
 <p>System: <input type="text" name="sys" /></p>
 <p>Fundstücke <input type="textarea" name="inputvs" /></p>
 <p><input type="eintragen" /></p>
</form>

<?php

echo htmlspecialchars($_POST['sys']);

echo "\n";

$arr = explode("\r\n", trim($_POST['inputvs']));
 
for ($i = 0; $i < count($arr); $i++) {
   $zeile = $arr[$i];
   echo $zeile;
   echo "\n";
}

?>


</body>
</html>
