<?php if($user): 
	
	Router::redirect("/posts");
 else: ?>
	<div class='headertext'>
		Post Your Workout for Today. Please Sign Up or Log In.
	</div>
	<br />
	
	<img src='/images/weights.jpg' alt="weights" class='imagecenter' />
	<br />
	
	<div class='center'>
		<a href='/users/signup' class='homebutton'>Signup</a>
		<a href='/users/login' class='homebutton'>Login</a>
		<br /><br />
		
		
	</div>
<?php endif; ?>