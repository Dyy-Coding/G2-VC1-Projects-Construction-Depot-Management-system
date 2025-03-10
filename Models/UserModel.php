<?php
// models/User.php
require_once 'Database/Database.php';
class User {
    public $name;
    public $email;
    public $password;
    public $confirm_password;

    // Function to validate the form
    public function validateForm($data) {
        $errors = [];

        // Check if all fields are filled
        if (empty($data['name'])) {
            $errors[] = "Name is required.";
        }

        if (empty($data['email'])) {
            $errors[] = "Email is required.";
        } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        }

        if (empty($data['password'])) {
            $errors[] = "Password is required.";
        } elseif (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d@$!%*?&]{8,}$/", $data['password'])) {
            $errors[] = "Password must be at least 8 characters long, contain an uppercase letter, a lowercase letter, and a number.";
        }

        if (empty($data['confirm_password'])) {
            $errors[] = "Confirm password is required.";
        } elseif ($data['password'] !== $data['confirm_password']) {
            $errors[] = "Passwords do not match.";
        }

        return $errors;
    }

    // Simulate saving data (e.g., to a database)
    public function save($data) {
        // Normally, you would save data to the database here.
        return true;
    }
}

?>
