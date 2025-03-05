<?php
class UserController extends BaseController {
    public function register() {
        $this->view('users/register');
    }
}