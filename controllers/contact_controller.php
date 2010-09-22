<?php

class ContactController extends AppController {
	var $uses = array('Contact.Contact');
	var $components = array('Contact.Captcha');

	function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('*');
	}
	
	function index() {

		if (!empty($this->data)) {
			$c =& $this->Contact;
			// $c->requireCaptcha(!$this->Ktai->is_ktai());
			$c->answerCaptcha = $this->Session->read('captcha');
		}
		$this->Transition->checkData('confirm', $this->Contact, null, '送信内容に不備があります。');
		$this->pageTitle = 'Contact';
		$this->layout = 'sub';
	
	}

	function confirm() {
		if (!empty($this->data['Contact']['back_to'])) {
			$this->redirect($this->data['Contact']['back_to']);
		}
		$this->Transition->automate('end', false, 'index', null, array('invalid' => '不正なデータです。', 'prev' => '不正なページ遷移です。'));

		$this->set('data', $this->Transition->data('index'));
		$this->pageTitle = '送信確認';
		$this->layout = 'sub';
	}

	function end() {
		$this->Transition->checkPrev(array('index', 'confirm'), '不正なページ遷移です。', array('action' => 'index'));
		
		$data = $this->Transition->data('index');
		$c =& $this->Contact;

		// $c->requireCaptcha(!$this->Ktai->is_ktai());
		$c->answerCaptcha = $this->Session->read('captcha');
		$c->set($data);
		if (!$c->validates()) {
			$this->Session->setFlash('送信内容に不備があります。');
			$this->redirect(array('action' => 'index'));
		}
		extract($data['Contact']);
		$this->toAddr = Configure::read('Site.contact_mail');
		$this->fromAddr = $email;

		if (!empty($company_name)) {
			$company_name .= ' : ';
		}
		if (DS != "\\") {
			if (!$this->_send($company_name . $name, 'contact_collect', compact('name', 'email', 'company_name', 'statement'))) {
				$this->Session->setFlash('送信に失敗しました。お手数ですが、時間を空けてから再度入力してください。');
				$this->redirect(array('action' => 'index'));
			} else {
				// 送信完了のメール？
			}
		}
		$this->Transition->clearData();
		$this->pageTitle = '送信完了';
	}

	function captcha() {
		$this->Captcha->render();
	}

	function _send($subject, $template, $params = array()) {

		$q =& $this->Qdmail;
		 //Qdmail初期化
		$q->reset();
		//$q->smtp(true);
		//$q->smtpServer('127.0.0.1');
		$q->from($this->fromAddr);
		$q->to($this->toAddr);

		$q->subject($subject);
		$q->cakeText($params, $template);

		$q->errorDisplay(false);
		$q->logPath(LOGS);
		$q->logFilename("mail.log");
		$q->errorlogPath(LOGS);
		$q->errorlogFilename("error_mail.log");
		$q->wordwrapAllow(true);
		$q->errorlogLevel(1);
		$q->logLevel(1);
		// $q->debug(2);

		return $q->send();
	}


	
}