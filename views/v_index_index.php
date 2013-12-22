<?php if($user): 
	
	Router::redirect("/posts");
 else: ?>
	<div class='headertext'>
		Welcome to YUSI!. Please sign up or log in.
	</div>
	<br />
	
	<img src='/images/lion_cute.png' alt="YUSI logo" class='imagecenter' />
	<br />
	
	<div class='center'>
		<a href='/users/signup' class='homebutton'>Signup</a>
		<a href='/users/login' class='homebutton'>Login</a>
		<br /><br />
		
		My +2 features are:
		<br />
		1) Upload profile picture and view users profile pictures
		<br />
		2) View your followers
	</div>
<?php endif; ?>