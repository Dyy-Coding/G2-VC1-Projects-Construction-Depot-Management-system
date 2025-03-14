<?php
// require_once 'Models/UserModel.php';


class UserController extends BaseController {

    public function register() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Initialize error array
            $errors = [];

            // Sanitize inputs
            $username = isset($_POST['username']) ? trim($_POST['username']) : '';
            $email = isset($_POST['email']) ? trim($_POST['email']) : '';
            $password = isset($_POST['password']) ? trim($_POST['password']) : '';
            $confirm_password = isset($_POST['cf_password']) ? trim($_POST['cf_password']) : '';

            // 1. Ensure all fields are required
            if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
                $errors[] = "All fields are required.";
            }

            // 2. Validate email format
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Invalid email format.";
            }

            // 3. Implement password strength rules
            if (!preg_match("/[A-Z]/", $password)) {
                $errors[] = "Password must contain at least one uppercase letter.";
            }
            if (!preg_match("/[a-z]/", $password)) {
                $errors[] = "Password must contain at least one lowercase letter.";
            }
            if (!preg_match("/[0-9]/", $password)) {
                $errors[] = "Password must contain at least one number.";
            }
            if (!preg_match("/[!@#$%^&*()]/", $password)) {
                $errors[] = "Password must contain at least one special character.";
            }
            if (strlen($password) < 8) {
                $errors[] = "Password must be at least 8 characters long.";
            }

            // 4. Check if passwords match
            if ($password !== $confirm_password) {
                $errors[] = "Passwords do not match.";
            }

            // If there are errors, return to form with error messages
            if (!empty($errors)) {
                // Pass errors to the view
                $this->view('admin/users/register');// or wherever you handle the errors in your view
                // echo "There are errors";
                return;
            }
        } 
    }

    public function login() {
        $this->view('admin/users/login');
    }
}
