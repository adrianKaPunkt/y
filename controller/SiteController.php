<?php
namespace app\controller;

use app\core\Controller;
use app\core\Request;


class SiteController extends Controller
{
	public function handleContact(Request $request) {
		$body = $request->getBody();

		var_dump($body);
	}

	public function contact() {
		return $this->render('contact');
	}

	public function home() {
		$params = [
			'firstName' => 'Adrian',
			'lastName' => 'Kocelj'
		];
		return $this->render('home', $params);
	}
}