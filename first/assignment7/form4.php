<?php
   $oldguess=isset($_POST['guess']) ? $_POST['guess'] : '';
?>

<p>guessing game</p>
<form method="post">
	<p><label for="guess">input guess</label>
		<input type="text" name="guess" id="guess" size="40" value="<?= htmlentities($oldguess)?>"/>
	</p>
	<input type="submit" />
</form>
<pre>
	$_POST:
	<?php
	   print_r($_POST)
	   ?>
</pre>