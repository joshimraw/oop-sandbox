<?php

class Pages extends Controller {

	public function __construct(){
		// echo 'Pages loaded <br>';
	}

	public function index(){
		$data = [
			'title' => 'Welcome',
			'para'	=> 'some dummy string here'
		];
		$this->view('pages/index', $data);
	}

	public function about(){
		$data = [
			'title' => 'About Us',
			];
		$this->view('pages/about', $data);
	}
}