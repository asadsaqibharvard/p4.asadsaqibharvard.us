<?php
class users_controller extends base_controller {

    public function __construct() {
        parent::__construct();
       
    } 

    public function index() {
        echo "This is the index page";
    }

    public function signup() {

        #Set up the view
        $this->template->content=View::instance('v_users_signup');
        $this->template->title = "Sign Up";

        $request_url = $_SERVER['REQUEST_URI'];

        # check if we got an error message
        if (strpos($request_url,'err=1') !== false)
        {
            $this->template->content->errormessage = "user already exists!";
        }

        if (strpos($request_url,'err=2') !== false)
        {
            $this->template->content->errormessage = "first name is missing!";
        }

        if (strpos($request_url,'err=3') !== false)
        {
            $this->template->content->errormessage = "last name is missing!";
        }

        if (strpos($request_url,'err=4') !== false)
        {
            $this->template->content->errormessage = "email is missing!";
        }

        if (strpos($request_url,'err=5') !== false)
        {
            $this->template->content->errormessage = "password is missing!";
        }

        #Render the view
        echo $this->template;

    }

    public function p_signup(){

        # Sanitize the user entered data to prevent any funny-business (re: SQL Injection Attacks)
        $_POST = DB::instance(DB_NAME)->sanitize($_POST);

        # validate fields
        if(empty($_POST['first_name'])){
            Router::redirect("/users/signup?err=2");
        }

        if(empty($_POST['last_name'])){
            Router::redirect("/users/signup?err=3");
        }

        if(empty($_POST['email'])){
            Router::redirect("/users/signup?err=4");
        }

        if(empty($_POST['password'])){
            Router::redirect("/users/signup?err=5");
        }

        #validate if user already exists
        $q = "SELECT email 
            FROM users 
            WHERE email = '".$_POST['email']."'";
        $existinguser = DB::instance(DB_NAME)->select_field($q);

        # If we didn't find a matching token in the database, it means login failed
        if($existinguser) {

            # Send them back to the signup page
            Router::redirect("/users/signup?err=1");
        } else { 

            $_POST['created'] = Time::now();
            $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);
            $_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());

            DB::instance(DB_NAME)->insert_row('users', $_POST);

            #Send them to the login page
            Router::redirect('/users/login');
        }
    }
    

    public function login($error = NULL) {
        
        #Setup view
        $this->template->content = View::instance('v_users_login');
        $this->template->title = "Login";

        # Pass data to the view
        $this->template->content->error = $error;

        #Render template
        echo $this->template;
    }


    public function p_login(){

        # Sanitize the user entered data to prevent any funny-business (re: SQL Injection Attacks)
        $_POST = DB::instance(DB_NAME)->sanitize($_POST);

        # Hash submitted password so we can compare it against one in the db
        $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);

        # Search the db for this email and password
        # Retrieve the token if it's available
        $q = "SELECT token 
            FROM users 
            WHERE email = '".$_POST['email']."' 
            AND password = '".$_POST['password']."'";

        $token = DB::instance(DB_NAME)->select_field($q);

        # If we didn't find a matching token in the database, it means login failed
        if(!$token) {

            # Send them back to the login page
            Router::redirect("/users/login/error");

         # But if we did, login succeeded! 
        } 
        else {

        /* 
        Store this token in a cookie using setcookie()
        Important Note: *Nothing* else can echo to the page before setcookie is called
        Not even one single white space.
        param 1 = name of the cookie
        param 2 = the value of the cookie
        param 3 = when to expire
        param 4 = the path of the cooke (a single forward slash sets it for the entire domain)
        */
        setcookie("token", $token, strtotime('+1 year'), '/');

        # Send them to the main page - or whever you want them to go
        Router::redirect("/posts");

        }

    }
    

    public function logout() {
        
        # Generate and save a new token for next login
        $new_token = sha1(TOKEN_SALT.$this->user->email.Utils::generate_random_string());

        # Create the data array we'll use with the update method
        # In this case, we're only updating one field, so our array only has one entry
        $data = Array("token" => $new_token);

        # Do the update
        DB::instance(DB_NAME)->update("users", $data, "WHERE token = '".$this->user->token."'");

        # Delete their token cookie by setting it to a date in the past - effectively logging them out
        setcookie("token", "", strtotime('-1 year'), '/');

        # Send them back to the main index.
        Router::redirect("/");


    }


    public function profile($user_name = NULL) {

         # If user is blank, they're not logged in; redirect them to the login page
        if(!$this->user) {
         Router::redirect('/users/login');
        }

        # Setup view
        $this->template->content = View::instance('v_users_profile');
        $this->template->title   = "Profile of".$this->user->first_name;

        # get list of users following user
        $q = "SELECT u.* 
            FROM users u inner join users_users uu on u.user_id = uu.user_id
            WHERE uu.user_id_followed = ".$this->user->user_id;

        $followers = DB::instance(DB_NAME)->select_array($q, 'user_id');

        # Pass data (users and connections) to the view
        $this->template->content->followers = $followers;


        # Render template
        echo $this->template;

    }

    public function saveprofile(){

            $allowedExts = array("gif", "jpeg", "jpg", "png","GIF", "JPEG", "JPG", "PNG");
            $temp = explode(".", $_FILES["file"]["name"]);
            $extension = end($temp);
            
            if ((($_FILES["file"]["type"] == "image/gif")
            || ($_FILES["file"]["type"] == "image/jpeg")
            || ($_FILES["file"]["type"] == "image/jpg")
            || ($_FILES["file"]["type"] == "image/pjpeg")
            || ($_FILES["file"]["type"] == "image/x-png")
            || ($_FILES["file"]["type"] == "image/png"))
            && ($_FILES["file"]["size"] < 20000000)
            && in_array($extension, $allowedExts))
              {
              if ($_FILES["file"]["error"] > 0)
                {
                echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
                }
              else
                {
                #echo "Upload: " . $_FILES["file"]["name"] . "<br>";
                #echo "Type: " . $_FILES["file"]["type"] . "<br>";
                #echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
                #echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

                $userimage = "uploads/" . $this->user->user_id . ".jpg";

                if (file_exists($userimage))
                  {
                    unlink($userimage);
                  }

                  move_uploaded_file($_FILES["file"]["tmp_name"], $userimage);
                  Router::redirect("/users/profile");

                }
              }
            else
              {
              echo "Invalid file";
              }
    }

} # end of the class