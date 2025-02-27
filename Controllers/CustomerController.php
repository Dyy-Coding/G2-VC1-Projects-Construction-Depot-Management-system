<?php
class CustomerController extends BaseController {
    public function index(){
        $this->view('customers/customer');
    }
}