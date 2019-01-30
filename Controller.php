<?php
require_once('Model.php');
class Controller{
	public function create(){
	$data = [];
	$data= $_POST;
	unset($data['create']);
	$obj_Model = new Model();
	$obj_Model->create('user_tbl',$data);
	}
}

if (isset($_POST['name'])) {
	// $obj_Controller = new Controller();
	// $obj_Controller->create();
	echo $_POST['name'];
    // echo json_encode($_POST['name']);
}

