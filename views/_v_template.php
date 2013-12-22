<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<link rel="stylesheet" type="text/css" href="/css/styles.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	


</head>

<body>	

	<div id='menu'>

        <!-- Menu for users who are logged in -->
        <?php if($user): ?>

            <a href='/posts/users'>Users</a>
            <a href='/posts/add'>Add Post</a>
			<a href='/posts/addworkout'>Add Workout Post</a>
            <a href='/posts'>Posts</a>
            <a href='/users/profile'>Profile</a>
            <a href='/users/logout'>Logout</a>

        <!-- Menu options for users who are not logged in -->
        <?php else: ?>

            <a href='/'>Home</a>
            <a href='/users/signup'>Sign up</a>
            <a href='/users/login'>Log in</a>

        <?php endif; ?>

    </div>
    <div id='maincontent'>
	   <?php if(isset($content)) echo $content; ?>
    </div>
    <div id='footer'>
	   <?php if(isset($client_files_body)) echo $client_files_body; ?>
    </div>
</body>
</html>