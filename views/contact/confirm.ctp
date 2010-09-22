
			
			<!-- InstanceBeginEditable name="nandemo_page_title" -->
			<div id="nandemo_page_title">
				<h2>CONTACT CONFIRM</h2>
				<p>Contact 確認ページ</p>
			<!-- / #nandemo_page_title --></div>
			<!-- InstanceEndEditable -->
			
			<!-- InstanceBeginEditable name="nandemo_message" -->
			<div id="nandemo_message">

				<p>メッセージ</p>
			<!-- / #nandemo_message --></div>
			<!-- InstanceEndEditable -->
	
			<div id="nandemo_contents_list">
				<!-- InstanceBeginEditable name="nandemo_contents_list" -->
<?php extract($data['Contact']) ?>
				<h3>お名前</h3>
				<p><?php echo h($name) ?></p>

				<h3>E-mail</h3>
				<p><?php echo h($email) ?></p>

				<h3>会社名</h3>
				<p><?php echo h($company_name) ?></p>

				<h3>お問い合わせ内容</h3>
				<p><?php echo nl2br(h($statement)) ?></p>

				<?php echo $this->Form->create() ?>
				<?php echo $this->Form->hidden('dummy') ?>
				<?php echo $this->Form->end('送信する') ?>
<?php

echo $this->Form->create();
echo $this->Form->hidden('back_to', array('value' => Router::url(array('action' => 'index'), true)));
echo $this->Form->end('修正');

?>

				<!-- InstanceEndEditable -->
			<!-- / #nandemo_contents_list --></div>