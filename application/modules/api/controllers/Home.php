<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Api_Controller {

	public function init() {}
	public function after_init() {}

	public function index() {
		header('Content-type: application/json');
        $success = array('title' => "MARKNEL TEST API", "description" => "API");
        echo json_encode($success);
	}
}
