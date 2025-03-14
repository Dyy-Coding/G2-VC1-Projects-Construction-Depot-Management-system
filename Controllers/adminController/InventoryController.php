<?php
class InventoryController extends BaseController {
    public function index(){
        $this->view('admin/inventories/inventory');
    }
}