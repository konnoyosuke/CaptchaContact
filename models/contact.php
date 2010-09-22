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
		'category' => array(
			'rule' => array('notEmpty'),
			'message' => 'いずれかひとつを選択してください',
			'allowEmpty' => false,
		),
		'prefecture' => array(
			'rule' => array('isPrefecture', 'prefecture'),
			'message' => '都道府県を選択してください',
		),		
		'address1' => array(
			'rule' => array('notEmpty'),
			'message' => '市町村・番地を入力してください',
			'allowEmpty' => false,
		),
		'zipcode' => array(
			'rule' => array('postal', '/\\A\\b[0-9]{3}(?:-[0-9]{4})?\\b\\z/i', null),
			'message' => '郵便番号の形式が正しくありません。'
		),
		'phone' => array(
			'phone' => array(
				'rule' => array('phone', '/\d{2,4}-\d{2,4}-\d{4}/', null), 
				'message' => '電話番号の形式で入力してください。（例）03-5555-5555。'
			),
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => '電話番号を入力してください。',
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
	
	function isPrefecture($data, $target) {
		$check = current($data);
		if ($check == 'empty') {
			return false;
		}
 		return $check == $this->data[$this->name][$target];
	}	
	
}
?>