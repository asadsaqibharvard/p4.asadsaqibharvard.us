<h2>Log In</h2>

<form method='POST' action='/users/p_login'>

	<?php if(isset($error)): ?>
        <div class='error'>
            Login failed. Please double check your email and password.
        </div>
        <br>
    <?php endif; ?>
	<div class='formlabel'>Email:</div> <input type='text' name='email' class='forminput'><br /><br />
	<div class='formlabel'>Password:</div> <input type='password' name='password' class='forminput'><br /><br />
	<input type='Submit' value='Log in' class='formbutton'>

</form>

