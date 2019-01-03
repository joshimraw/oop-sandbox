<?php

class Pages extends Controller {

	public function __construct(){
	
	}

	public function index(){
		if(isLoggedIn()){
			redirect('posts');
		}
		
		$data = [
			'title' => 'Welcome to Small Efforts',
			'description' => 'This is the test social community site build in by php mvc framework. Sometimes you want to use the collapse plugin to trigger hidden content elsewhere on the page.!'

		];
		$this->view('pages/index', $data);
	}

	public function about(){
		$data = [
			'title' => 'About Us',
			'description' => 'We are just starting the our new community. everything is here to learn and teach '
			];
		$this->view('pages/about', $data);
	}
}