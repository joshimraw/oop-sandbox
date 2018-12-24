<?php 


class Users extends Controller{
	public function __construct(){
		$this->userModel = $this->model('User'); // user = new user;
	}

	public function register(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){

			// proccess the form 
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			$data = [
				'name' 			=> trim($_POST['name']),
				'email' 		=> trim($_POST['email']),
				'password'		=> trim($_POST['password']),
				'confm_pass'	=> trim($_POST['confm_pass']),

				'name_err'		=> '',
				'email_err'		=> '',
				'password_err'	=> '',
				'confm_pass_err' => ''

			];

			if(empty($data['name'])){
				$data['name_err'] = 'Name is required';
			}

			if(empty($data['email'])){
				$data['email_err'] = 'Email is required';
			}elseif($this->userModel->findUserByEmail($data['email'])){
				$data['email_err'] = 'Email has taken';
			}

			if(empty($data['password'])){
				$data['password_err'] = 'Password is required';
			}else if(strlen($data['password']) < 4){
				$data['password_err'] = 'Password must be at least 4 character';
			}
			if(empty($data['confm_pass'])){
				$data['confm_pass_err'] = 'Confirm password is required';
			}else if($data['confm_pass'] != $data['password']){
				$data['confm_pass_err'] = 'Confirm password do not match';
			}

			// Make sure errors are empty
	        if(empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confm_pass_err'])){
	          
	          // Hash Password
	        	$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

	        	// Register User
	        	if($this->userModel->register($data)){
	        		flash('register_success', 'Your are register and cal login now');
	        		redirect('users/login');
	        	}else{
	        		die('Something went wrong');
	        	}

			}else{
				// Load the view with error
				$this->view('users/register', $data);
			}

		}else{
			$data =[
		          'name' => '',
		          'email' => '',
		          'password' => '',
		          'confm_pass' => '',

		          'name_err' => '',
		          'email_err' => '',
		          'password_err' => '',
		          'confm_pass_err' => ''
	        ];

        // Load view
        $this->view('users/register', $data);
		}
	}

	public function login(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			// proccess the form 
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			$data = [

				'email' 		=> trim($_POST['email']),
				'password'		=> trim($_POST['password']),

				'email_err'		=> '',
				'password_err'	=> ''

			];
		
			if(empty($data['email'])){
				$data['email_err'] = 'Email is required';
			}
			if(empty($data['password'])){
				$data['password_err'] = 'Password is required';
			}else if(strlen($data['password']) < 4){
				$data['password_err'] = 'Password must be at least 4 character';
			}
			
			if(!$this->userModel->findUserByEmail($data['email'])){
				$data['email_err'] = 'User not found';
			}
			// Make sure errors are empty
	        if(empty($data['email_err']) && empty($data['password_err'])){
	          
	          $loggedInUser = $this->userModel->login($data['email'], $data['password']);
	          if($loggedInUser){
	          	// create session 
	          	$this->createUserSession($loggedInUser);
	          }else{
	          	$data['password_err'] = 'Password incorrect';

	          	$this->view('users/login', $data);
	          }

			}else{
				// Load the view with error
				$this->view('users/login', $data);
			}

		}else{
			// load the form
			$data = [

				'email' 		=> '',
				'password'		=> '',

				'email_err'		=> '',
				'password_err'	=> ''

			];
			// Load the view
			$this->view('users/login', $data);
		}
	}

	public function createUserSession($user){
		$_SESSION['user_id'] 	= $user->id;
		$_SESSION['user_name']  = $user->name;
		$_SESSION['user_email']	= $user->email;

		redirect('pages/about');
	}

	public function logout(){
		unset($_SESSION['user_id']);
		unset($_SESSION['user_name']);
		unset($_SESSION['user_email']);
		session_destroy();

		redirect('users/login');
	}

	public function isLoggedIn(){
		if(isset($_SESSION['user_id'])){
			return true;
		}else{
			return false;
		}
	}
}