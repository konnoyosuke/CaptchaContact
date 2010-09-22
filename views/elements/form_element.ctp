
<?php
	$params = isset($params) ? $params : array();
	$before_input = isset($before_input) ? $before_input : null;
?>

<p class="nandemo_form_label">
<?php echo $this->Form->label($field, $colmun_name . '<span class="small">' . $notice . '</span>') ?>
</p>
<p class="nandemo_form_input">
<?php echo $before_input ?>
<?php echo $this->Form->input($field, $params); ?>
</p>