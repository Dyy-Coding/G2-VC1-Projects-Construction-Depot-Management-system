<?php
class CustomerController extends BaseController {
    public function index(){
        $this->view('admin/customers/customer');
    }
}