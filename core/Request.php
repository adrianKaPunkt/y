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

	 public function getMethod() {
		return strtolower($_SERVER['REQUEST_METHOD']);
	 }
 }