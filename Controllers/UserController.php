<?php
require_once 'Models/UserModel.php';

// controllers/UserController.php
class UserController {

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Check if form data is submitted
            $data = [
                'name' => isset($_POST['name']) ? $_POST['name'] : '',
                'email' => isset($_POST['email']) ? $_POST['email'] : '',
                'password' => isset($_POST['password']) ? $_POST['password'] : '',
                'confirm_password' => isset($_POST['confirm_password']) ? $_POST['confirm_password'] : ''
            ];

            // Create an instance of the User model
            $user = new User();
            $errors = $user->validateForm($data);

            if (empty($errors)) {
                // Save data if no errors
                if ($user->save($data)) {
                    echo "User registered successfully!";
                }
            } else {
                // Load the form again with errors
                require_once "views/users/register.php";
            }
        } else {
            // Display the form for the first time
            require_once "views/users/register.php";
        }
    }
<<<<<<< HEAD
}

?>
=======

    public function login() {
        $this->view('users/login');
    }
}
>>>>>>> 086236c980abf6e8b0765422de636dd0d1789ff5
