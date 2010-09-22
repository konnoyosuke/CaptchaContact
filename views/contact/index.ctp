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
				<?php echo $this->element('form_element', array('field' => 'company', 'colmun_name' => 'お客様会社名' , 'notice' => '&nbsp;ここに注意書きが入ります')) ?>
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
            <td><input type="text" name="post1" size="3" maxlength="3" id="post1" value="" />
              -
              <input type="text" name="post2" size="4" maxlength="4" id="post2" value="" />
            </td>
          </tr>
          <tr>

            <th scope="row" class="company"><label for="prefecture">都道府県</label></th>
            <td><select name="prefecture" id="prefecture">
            	                    <option value="" selected="selected">選択してください</option>
                                    
                <optgroup label="北海道・東北地方">
                <option value="北海道">北海道</option>
                <option value="青森県">青森県</option>
                <option value="岩手県">岩手県</option>

                <option value="宮城県">宮城県</option>
                <option value="秋田県">秋田県</option>
                <option value="山形県">山形県</option>
                <option value="福島県">福島県</option>
                </optgroup>
                <optgroup label="関東地方">
                <option value="茨城県">茨城県</option>

                <option value="栃木県">栃木県</option>
                <option value="群馬県">群馬県</option>
                <option value="埼玉県">埼玉県</option>
                <option value="千葉県">千葉県</option>
                <option value="東京都">東京都</option>
                <option value="神奈川県">神奈川県</option>

                </optgroup>
                <optgroup label="中部地方">
                <option value="新潟県">新潟県</option>
                <option value="富山県">富山県</option>
                <option value="石川県">石川県</option>
                <option value="福井県">福井県</option>
                <option value="山梨県">山梨県</option>

                <option value="長野県">長野県</option>
                <option value="岐阜県">岐阜県</option>
                <option value="静岡県">静岡県</option>
                <option value="愛知県">愛知県</option>
                </optgroup>
                <optgroup label="近畿地方">
                <option value="三重県">三重県</option>

                <option value="滋賀県">滋賀県</option>
                <option value="京都府">京都府</option>
                <option value="大阪府">大阪府</option>
                <option value="兵庫県">兵庫県</option>
                <option value="奈良県">奈良県</option>
                <option value="和歌山県">和歌山県</option>

                </optgroup>
                <optgroup label="中国地方">
                <option value="鳥取県">鳥取県</option>
                <option value="島根県">島根県</option>
                <option value="岡山県">岡山県</option>
                <option value="広島県">広島県</option>
                <option value="山口県">山口県</option>

                </optgroup>
                <optgroup label="四国地方">
                <option value="徳島県">徳島県</option>
                <option value="香川県">香川県</option>
                <option value="愛媛県">愛媛県</option>
                <option value="高知県">高知県</option>
                </optgroup>

                <optgroup label="九州地方">
                <option value="福岡県">福岡県</option>
                <option value="佐賀県">佐賀県</option>
                <option value="長崎県">長崎県</option>
                <option value="熊本県">熊本県</option>
                <option value="大分県">大分県</option>

                <option value="宮崎県">宮崎県</option>
                <option value="鹿児島県">鹿児島県</option>
                <option value="沖縄県">沖縄県</option>
                </optgroup>
                <option value="日本国外">日本国外</option>
              </select>
            </td>

</tr>
<tr>
<th scope="row" class="company"><label for="address1">市区町村・番地</label></th>
<td><input type="text" name="city" size="30" id="city" value="" /></td>
</tr>
<tr>
<th scope="row" class="company"><label for="address2">アパート・マンション名</label></th>
<td><input type="text" name="bill" size="30" id="bill" value="" /></td>

</tr>
<tr>
<th scope="row" class="company"><label for="email">E-Mailアドレス（必須）</label></th>
<td>
<?php echo $this->element('form_element', array('field' => 'email', 'colmun_name' => 'E-mail' , 'notice' => 'ここに注意書きが入ります')) ?>
</td>
</tr>

<tr>
<th scope="row" class="company"><label for="category">お問い合わせの種類（必須）</label></th>
<td>

<input name="category" type="radio" value="このサイトについてのお問い合わせ" id="category1" />
<label for="category1">このサイトについてのお問い合わせ</label>

<br />

<input name="category" type="radio" value="弊社の業務内容についてのお問い合わせ" id="category2" />
<label for="category2">弊社の業務内容についてのお問い合わせ</label>

<br />

<input name="category" type="radio" value="その他のお問い合わせ" id="category3" />

<label for="category3">その他のお問い合わせ</label>

</td>
</tr>
<tr>
<th scope="row" class="company"><label for="content">お問い合わせ内容<em>（必須）</em></label></th>
<td>
	<?php echo $this->element('form_element', array('field' => 'statement', 'colmun_name' => 'お問い合わせ内容' , 'notice' => 'ここに注意書きが入ります', 'params' => array('type' => 'textarea'))) ?>
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



