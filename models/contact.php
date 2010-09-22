<?php
class Contact extends AppModel {
	var $useTable = false;
	var $answerCaptcha = null;

	var $validate = array(
		'name' => array(
			'maxlength' => array(
				'rule' => array('maxlength', 50),
				'message' => '文字数が長すぎるか短すぎます。',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'between' => array(
				'rule' => array('between', 4, 256),
				'message' => '文字数が長すぎるか短すぎます。',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'email' => array(
				'rule' => array('email'),
				'message' => 'メールアドレスを正しく入力してください。',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'company_name' => array(
			'between' => array(
				'rule' => array('between', 4, 256),
				'message' => '文字数が長すぎるか短すぎます。',
				'allowEmpty' => true,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'statement' => array(
			'between' => array(
				'rule' => array('between', 10, 512),
				'message' => '文字数が長すぎるか短すぎます。',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'multibyte' => array(
				'rule' => array('isMultibyte'),
				'message' => '日本語で入力してください。',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'captcha' => array(
			'captcha' => array(
				'rule' => array('validCaptcha'),
				'message' => '画像と入力が一致しません。入力しなおしてください。',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	function isMultibyte($data) {
		$check = current($data);
		return strlen($check) != mb_strlen($check);
	}

	function requireCaptcha($yes = true) {
		if ($yes) {
			$this->validate['captcha']['captcha']['required'] = true;
			$this->validate['captcha']['captcha']['allowEmpty'] = false;
		} else {
			$this->validate['captcha']['captcha']['required'] = false;
			$this->validate['captcha']['captcha']['allowEmpty'] = true;
		}
	}

	function validCaptcha($data) {
		$check = current($data);
		$check = mb_convert_kana($check, 'a');

		if (empty($this->answerCaptcha)) {
			return false;
		}
		return $check == $this->answerCaptcha;
	}
}
?>