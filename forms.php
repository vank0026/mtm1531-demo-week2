<?php

var_dump($_POST);

?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Forms</title>
</head>
<body>

<form action="forms.php" method="post"> <!-- the action thing tells the form where to send the info, method tells you where the thing looks for the info (post is form, get is querry -->

	<label for="planet">Fav. Planet</label>
	<input id="planet" name="planet"> <!-- id is for the browser to read, name is for the server to read -->

	<label for="moon">How Many Moons?</label>
	<input type="number" id="moon" name="moon">
	
	<button type="submit">Submit</button>
</form>


<?php if (!empty($_POST["planet"]) && !empty($_POST["moon"])) : ?>

	<p><strong>Does <?php echo $_POST["planet"]; ?> really have <?php echo $_POST["moon"]; ?> moons?  <i>Really?</i></strong></p>

	<?php if ($_POST["planet"] == "Saturn") : ?>
	<p>That's some mad bling.</p>
	<?php endif; ?>

<?php endif; ?>

</body>
</html>
