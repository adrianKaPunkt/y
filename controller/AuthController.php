<?php
namespace app\controller;

use app\core\Controller;
use app\core\Request;

class AuthController extends Controller
{
	public function login() {
		$this->setLayout('auth');
		return $this->render('login');
	}

	public function register(Request $request) {
		//$this->setLayout('auth');
		if($request->isPost()) {
			var_dump($request->getBody());
		}
		return $this->render('register');
	}
}