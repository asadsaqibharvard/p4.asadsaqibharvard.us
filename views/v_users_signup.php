<h2>Sign Up</h2>

<?php if(isset($errormessage)): ?>
	<div class='error'>
	    <?=$errormessage?>
	</div>
	<br>
<?php endif; ?>

<form method='POST' action='/users/p_signup'>

	<div class='formlabel'>First Name</div> <input type='text' name='first_name' class='forminput'><br /><br />
	<div class='formlabel'>Last Name</div> <input type='text' name='last_name' class='forminput'><br /><br />
	<div class='formlabel'>Email</div> <input type='text' name='email' class='forminput'><br /><br />
	<div class='formlabel'>Password</div><input type='password' name='password' class='forminput'><br /><br />
	<input type='submit' value='Sign Up' class='formbutton' />


</form>