<?php

namespace app\core;

/**
 * Class Request
 * 
 * @author Adrian Kocelj
 * @package app\core
 * 
 */

 class Request
 {
	public function getPath() {
		$path = $_SERVER['REQUEST_URI'] ?? '/';
		//Checkt, ob die URL ein Fragezeichen enthält
		$position = strpos($path, '?');
		//Wenn die URL kein Fragezeichen enthält, dann ausgeben.
		if($position === false) {
			return $path;
		}
		//URL-String vor dem Fragezeichen ausgeben
		return substr($path, 0, $position);
	}

	/**
	 * Gibt die Request-Methode aus wie z.B. 'get' oder 'post'
	 * @return string
	 */
	public function method() {
		return strtolower($_SERVER['REQUEST_METHOD']);
	}

	/**
	 * Prüft, ob es ein GET-Request ist
	 * @return bool
	 */
	public function isGet() {
		return $this->method() === 'get';
	}

	/**
	 * Prüft, ob es ein POST-Request ist
	 * @return bool
	 */
	public function isPost() {
		return $this->method() === 'post';
	}

	public function getBody() {
		$body = [];
		if($this->method() == 'get') {
			foreach($_GET as $key => $value) {
				$body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
			}
		}
		if($this->method() == 'post') {
			foreach($_POST as $key => $value) {
				$body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
			}
		}
		return $body;
	}

	
		
		
	
 }