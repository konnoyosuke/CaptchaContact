<?php echo $this->Html->css('/contact/css/contact', null , array('inline'=>false));?>

<div id="main">

<ul id="topic_path">
	<li>
	<?php $this->Menu->push('crumbs', 'お問い合わせ') ?>
	<?php echo $this->Html->link('トップページ', '/') ?>
	<?php echo $this->Menu->display('crumbs', array('item_options' => array('before' => '&nbsp;&raquo;&nbsp;<em>', 'after' => '</em>'))) ?>
	<li>
</ul>
	
	

    <h3>お問い合わせ</h3>
    <div class="block">
    	<p>
    		製品などのお問い合わせはこちらからお願い致します。<br />
			数日以内に弊社担当者からご返信またはご連絡させて頂きます。
    	</p>
    </div>
    <div class="block">

		<?php echo $this->Form->create('Contact', array('id' => 'form', 'name' => 'form', 'inputDefaults' => array('div' => false, 'label' => false), 'url' => array('controller' => 'contact', 'action' => 'index'))) ?>

        <table class="table01" summary="お問い合わせに関する入力項目名とその入力欄">
          <tr>
            <th scope="row" class="company"><label for="name">お客様会社名（必須）</label></th>
            <td>
				<?php echo $this->element('form_element', array('field' => 'company_name', 'colmun_name' => 'お客様会社名' , 'notice' => '&nbsp;ここに注意書きが入ります')) ?>
			</td>
          </tr>
		
		<tr>
		<th scope="row" class="company"><label for="name">ご担当者様（必須）</label></th>
		<td>
		<?php echo $this->element('form_element', array('field' => 'name', 'colmun_name' => 'ご担当者様' , 'notice' => '&nbsp;ここに注意書きが入ります')) ?>
		</td>
		</tr>


          <tr>
            <th scope="row" class="company">
			<label for="postcode1">郵便番号</label>
			</th>
            <td>
				<?php echo $this->element('form_element', array('field' => 'zipcode', 'colmun_name' => '郵便番号' , 'notice' => '&nbsp;ここに注意書きが入ります')) ?>
            </td>
          </tr>
          <tr>

            <th scope="row" class="company"><label for="prefecture">都道府県</label></th>
            <td>
	
		<?php echo $this->Form->input('prefecture', array('options'=>array(
			'empty' => '選択してください',
				'北海道' => '北海道',
				'青森' => '青森',
				'岩手' => '岩手',
                '宮城県'=>'宮城県',
                '秋田県'=>'秋田県',
                '山形県' => '山形県',
                '福島県' => '福島県',
                '茨城県' => '茨城県',
                '栃木県' => '栃木県',
                '群馬県' => '群馬県',
                '埼玉県' => '埼玉県',
                '千葉県' => '千葉県',
                '東京都' => '東京都',
                '神奈川県' => '神奈川県',
                '新潟県' => '新潟県',
                '富山県' => '富山県',
                '石川県' => '石川県',
                '福井県' => '福井県',
                '山梨県' => '山梨県',
                '長野県' => '長野県',
                '岐阜県' => '岐阜県',
                '静岡県' => '静岡県',
                '愛知県' => '愛知県',
                '三重県' => '三重県',
                '滋賀県' => '滋賀県',
                '京都府' => '京都府',
                '大阪府' => '大阪府',
                '兵庫県' => '兵庫県',
                '奈良県' => '奈良県',
                '和歌山県' => '和歌山県',
                '鳥取県' => '鳥取県',
                '島根県' => '島根県',
                '岡山県' => '岡山県',
                '広島県' => '広島県',
                '山口県' => '山口県',
                '徳島県' => '徳島県',
                '香川県' => '香川県',
                '愛媛県' => '愛媛県',
                '高知県' => '高知県',
                '福岡県' => '福岡県',
                '佐賀県' => '佐賀県',
                '長崎県' => '長崎県',
                '熊本県' => '熊本県',
                '大分県' => '大分県',
                '宮崎県' => '宮崎県',
                '鹿児島県' => '鹿児島県',
                '沖縄県' => '沖縄県',
                '日本国外' => '日本国外',
		)))?>
   </td>
</tr>
<tr>
<th scope="row" class="company"><label for="address1">市区町村・番地（必須）</label></th>
<td>
	<?php echo $this->element('form_element', array('field' => 'address1', 'colmun_name' => '' , 'notice' => '', 'params'=>array('size'=>30))) ?>
</td>
</tr>
<tr>
<th scope="row" class="company"><label for="address2">アパート・マンション名</label></th>
<td>
	<?php echo $this->element('form_element', array('field' => 'address2', 'colmun_name' => '' , 'notice' => '', 'params'=>array('size'=>30))) ?>
</td>
</tr>

<tr>
<th scope="row" class="email"><label for="email">E-Mailアドレス（必須）</label></th>
<td>
<?php echo $this->element('form_element', array('field' => 'email', 'colmun_name' => '' , 'notice' => '', 'params'=>array('size'=>30))) ?>
</td>
</tr>

<tr>
<th scope="row" class="email"><label for="email">お電話番号（必須）</label></th>
<td>
<?php echo $this->element('form_element', array('field' => 'phone', 'colmun_name' => '' , 'notice' => '', 'params'=>array('size'=>30))) ?>
</td>
</tr>

<tr>
<th scope="row" class="company"><label for="category">お問い合わせの種類（必須）</label></th>
<td>
	<?php echo $this->element('form_element', array('field' => 'category', 'colmun_name' => '' , 'notice' => '', 'params'=>array('type'=>'radio', 'legend'=>false, 'options'=>array(0=>'このサイトについてのお問い合わせ<br />',1=>'弊社の業務内容についてのお問い合わせ<br />','2'=>'その他のお問い合わせ<br />')))) ?>
</td>
</tr>
<tr>
<th scope="row" class="company"><label for="content">お問い合わせ内容<em>（必須）</em></label></th>
<td>
	<?php echo $this->element('form_element', array('field' => 'statement', 'colmun_name' => '' , 'notice' => 'ここに注意書きが入ります', 'params' => array('type' => 'textarea', 'cols'=>'50', 'rows'=>'10'))) ?>
</td>
</tr>
<tr>

<tr>
	<th scope="row" class="company"><label for="content">画像認証<em>（必須）</em></label></th>
<td>
<?php echo $this->element('form_element', array('field' => 'captcha', 'colmun_name' => '画像認証' , 'notice' => 'ここに注意書きが入ります', 'before_input' => '<img src="' . $html->url(array('controller' => 'contact', 'action' => 'captcha')) . '" /><br />')) ?>
</td>
</tr>

<td colspan="2" class="right"><input name="do" type="hidden" value="check">
<?php echo $this->Form->button('送信する', array('div' => false)) ?>
</td>
</tr>
</table>
<?php echo $this->Form->end() ?>

   	</div>
</div>



