<?php echo $this->Html->css('/contact/css/contact', null , array('inline'=>false));?>

<ul id="topic_path">
	<li>
	<?php $this->Menu->push('crumbs', 'お問い合わせ') ?>
	<?php echo $this->Html->link('トップページ', '/') ?>
	<?php echo $this->Menu->display('crumbs', array('item_options' => array('before' => '&nbsp;&raquo;&nbsp;<em>', 'after' => '</em>'))) ?>
	<li>
</ul>


	<h3>お問い合わせ 確認ページ</h3>
	<?php extract($data['Contact']) ?>
        <table class="table01" summary="お問い合わせに関する入力項目名とその入力欄">
          <tr>
            <th scope="row" class="company"><label for="name">お客様会社名（必須）</label></th>
            <td>
			<?php echo h($company_name) ?>
			</td>
          </tr>

		<tr>
		<th scope="row" class="company"><label for="name">ご担当者様（必須）</label></th>
		<td>
		<?php echo h($name)?>
		</td>
		</tr>

		<tr>
		<th scope="row" class="company">
		<label for="postcode1">郵便番号</label>
		</th>
			<td>
			<?php echo h($zipcode)?>
			</td>
		</tr>

		<tr>
		<th scope="row" class="company"><label for="prefecture">都道府県</label></th>
		<td>
		<?php echo h($prefecture)?>
		</td>
	</tr>
	<tr>
	<th scope="row" class="company"><label for="address1">市区町村・番地（必須）</label></th>
	<td>
		<?php echo h($address1)?>
	</td>
	</tr>
	<tr>
	<th scope="row" class="company"><label for="address2">アパート・マンション名</label></th>
	<td>
		<?php echo h($address2)?>
	</td>
	</tr>

	<tr>
	<th scope="row" class="email"><label for="email">E-Mailアドレス（必須）</label></th>
	<td>
	<?php echo h($email)?>
	</td>
	</tr>

	<tr>
	<th scope="row" class="email"><label for="email">お電話番号（必須）</label></th>
	<td>
	<?php echo h($phone)?>
	</td>
	</tr>

	<tr>
	<th scope="row" class="company"><label for="category">お問い合わせの種類（必須）</label></th>
	<td>
		<?php 
			switch($category) {
				case 0:
					echo h('このサイトについてのお問い合わせ');
					break;
				case 1:
					echo h('弊社の業務内容についてのお問い合わせ');
					break;
				case 2:
					echo h('その他のお問い合わせ');
					break;
			}
		?>
	</td>
	</tr>
	<tr>
	<th scope="row" class="company"><label for="content">お問い合わせ内容<em>（必須）</em></label></th>
	<td class="statement">
		<?php echo h($statement)?>
	</td>
	</tr>
	<tr>
	<td colspan="2" class="right"><input name="do" type="hidden" value="check">
		<?php echo $this->Form->create() ?>
		<?php echo $this->Form->hidden('dummy') ?>
		<?php echo $this->Form->end('送信する') ?>
	</td>
	</tr>

	<tr>
	<td colspan="2" class="right"><input name="do" type="hidden" value="check">
		<?php
		echo $this->Form->create();
		echo $this->Form->hidden('back_to', array('value' => Router::url(array('action' => 'index'), true)));
		echo $this->Form->end('修正');
		?>
	</td>
	</tr>
	
	</table>


