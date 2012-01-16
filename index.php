<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Query Strings</title>
</head>
<body>

<?php 
	
	echo $_GET["name"];
	echo " ";
	echo $_GET["lastname"];

?>

<a href="name.php?name=Roger">Roger</a>
<a href="name.php?name=Guy">Guy</a>
<a href="name.php?name=Buddy">Buddy</a>
<a href="name.php?name=Friend">Friend</a>


</body>
</html>
