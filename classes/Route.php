<?php
class formController extends UserAuth{
	public $fullname;
	public $email;
	public $password;
	public $confirmPassword;
	public $country;
	public $gender;
	
	public function __construct(){
        $this->db = new Dbh();
    }
	
	public function handleForm(){
		switch(true) {
            case isset($_POST['register']):
                //code to register students 
                $this->fullname = $_POST['fullnames'];
                $this->email = $_POST['email'];
                $this->password = $_POST['password'];
                $this->confirmPassword = $_POST['confirmPassword'];
                $this->gender = $_POST['gender'];
                $this->country = $_POST['country'];
                $this->register($this->fullname, $this->email, $this->password, $this->confirmPassword, $this->country, $this->gender);
                break;
            case isset($_POST['login']):
                ////code to login students 
                $this->email = $_POST['email'];
                $this->password = $_POST['password'];
                $this->login($this->email, $this->password);
                break;
            case isset($_POST['logout']):
                //code to logout students 
                $this->email = $_POST['email'];
                $this->logout($this->email);
                break;
            case isset($_POST['delete']):
                //code to delete students 
                $this->email = $_POST['id'];
                $this->deleteUser($this->email);
                break;
            case isset($_POST['reset']):
                //code for updating password
                $this->email = $_POST['email'];
                $this->password = $_POST['password'];
                $this->updateUser($this->email, $this->password);
                break;
            case isset($_POST['all']):
                //code for getting all users
                $this->getAllUsers();
                break;
            default:
                echo 'No form was submitted';
                break;
        }
    }
	}
