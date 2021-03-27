<?php
namespace app\controller;

use app\core\Controller;


class SiteController extends Controller
{
	public function handleContact() {
		return 'Handling submitted data';
	}

	public function contact() {
		return $this->render('contact');
	}

	public function home() {
		$params = [
			'name' => "Adrian"
		];
		return $this->render('home', $params);
	}
}