<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Name</title>
</head>
<body>

<!-- the isset() allows us to check if an index in an array is there before trying to use it
	it lets the human error factor (changing name, changing variable) to NOT make things ugly -->

<?php if(isset($_GET["name"])) :  ?>
<h1>Hello, <?php echo $_GET["name"] ?></h1>
<?php endif; ?>


</body>
</html>
