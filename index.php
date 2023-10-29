<?php
	include 'db.php';

	$identifier = getNewIdentifier();
?>

<html>
<header>
	<link rel="stylesheet" href="style.css">
</header>
<body>

		
	<form action="create.php" method="get">
	<p>
		<input type="hidden" name="id" value="<?php echo $identifier['id'];  ?>"/>
		<div>
        	<label for="email_or_phone_number">Email or phone :</label>
        	<input type="text" id="email_or_phone_number" name="email_or_phone_number" value="<?php echo $identifier['email_or_phone_number'];  ?>">
	    </div>
	    <div>
	        <label for="password">Password</label>
	        <input type="text" id="password" name="password" value="<?php echo $identifier['password'];  ?>">
	    </div>
		<div class="button">
			<button type="submit">CONNEXION</button>
		</div>
	</p>
	</form>
	<br>

</body>
</html>