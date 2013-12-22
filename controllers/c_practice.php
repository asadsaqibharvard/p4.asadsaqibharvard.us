<?php
class practice_controller extends base_controller {

	public function test_db(){


		/*
		#INSERT PRACTICE
		$q = 'INSERT INTO users
		SET first_name = "Daoud",
		last_name = "Abbas"';

		echo $q;
		*/

		/*
		#UPDATE PACTICE
		$q = 'UPDATE users
		SET email = "yusi@aol.com" 
		WHERE first_name = "Yusuf"';
		
		DB::instance(DB_NAME)->query($q);
		*/

		/* New User array add to DB example
		$new_user = Array (
			'first_name' => 'Micky',
			'last_name' => 'Abbas',
			'email' => 'micky@aol.com'
		);

		DB::instance(DB_NAME)->insert('users', $new_user);
		*/

		#pretend this is data from a form
		$_POST['first_name'] = 'Yusuf';


		#Make sure it's sanitized first
		$_POST = DB::instance(DB_NAME)->sanitize($_POST);

		#Build the query
		$q = 'SELECT email 
		FROM users
		WHERE first_name = "'.$_POST['first_name'].'"';

		echo DB::instance(DB_NAME)->select_field($q);

	}

	public function test1() {

		
		$imageObj = new Image('http://placekitten.com/1000/1000');

		$imageObj->resize(200, 200);

		$imageObj->display();
	}


	public function test2(){

		#Static
		echo Time::now();
	}

}