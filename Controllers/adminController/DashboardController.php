<?php

class DashboardController extends BaseController {
    public function dashboard() {
        $this->view('admin/dashboard/dashboard');
    }
}