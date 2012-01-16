<?php

  
//on regular computers, we get an error.  On Edumedia however, you will NEVER see error messages, unless...
//error_reporting(-1);
//ini_set('display_errors', 'on');


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
	
	<label for="galaxy">What Galaxy?</label>
	<select id="galaxy" name="galaxy">
		<option value="m">Milky Way Galaxy</option><!-- the value is sent to the server as m, rahter than as Milky Way Galaxy, .: more useable -->
		<option value="a">Andromeda Galaxy</option>
		<option value="t">Tadpole Galaxy</option>
		<option value="s">Sunflower Galaxy</option>
		<option value="c">Cartwheel Galaxy</option>
	</select>
	
	<button type="submit">Submit</button>
</form>


<?php if (!empty($_POST["planet"]) && !empty($_POST["moon"])) : ?>

	<p><strong>Does <?php echo $_POST["planet"]; ?> really have <?php echo $_POST["moon"]; ?> moons?  <i>Really?</i></strong></p>
	<p>Always remember, Men Very Easily Make Juggs Serve Usefull Nocturnal Purposes!</p>

	<?php if ($_POST["planet"] == "Mercury") : ?>
	<p>That's one really hot planet.</p>

	<?php elseif ($_POST["planet"] == "Venus") : ?>
	<p>The godess of love was way better than Minerva, that cow.</p>

	<?php elseif ($_POST["planet"] == "Earth") : ?>
	<p>That's where we live!</p>

	<?php elseif ($_POST["planet"] == "Mars") : ?>
	<p>There is no proof that they visited in the 40's.  Honest.</p>

	<?php elseif ($_POST["planet"] == "Jupiter") : ?>
	<p>The red spot is thrice the width of Earth.  Thats huge!</p>

	<?php elseif ($_POST["planet"] == "Saturn") : ?>
	<p>That's way too many rings for anyone's comfort.</p>

	<?php elseif ($_POST["planet"] == "Uranus") : ?>
	<p>That's not Myanus! Haha!</p>
	
	<?php elseif ($_POST["planet"] == "Neptune") : ?>
	<p>Silly person, that's not the King of the Sea, but a planet.</p>

	<?php elseif ($_POST["planet"] == "Pluto") : ?>
	<p>That's not really a planet anymore!</p>
	
	<?php else : ?>
		<p>That's not a real planet.  Try again.</p>

	<?php endif; ?>
	
	<?php 
	
		$moon_diff = $_POST["moon"] - 1;
	
	?>
	
	<p>You think <?php echo $_POST["planet"]; ?> has <?php echo $moon_diff; ?> more moons than Earth.</p>

<?php endif; ?>

</body>
</html>
