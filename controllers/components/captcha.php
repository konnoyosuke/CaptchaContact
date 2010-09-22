<?php

class CaptchaComponent extends Object {
	var $controller;
	function startup(&$controller) { 
		$this->controller =& $controller; 
	} 

	function render() { 
		App::import('Vendor', 'Contact.Kcaptcha.Kcaptcha'); 
		$kcaptcha = new KCAPTCHA(); 
		$this->controller->Session->write('captcha', $kcaptcha->getKeyString()); 
	} 
}