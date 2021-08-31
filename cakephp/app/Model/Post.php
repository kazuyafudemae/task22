<?php
class Post extends AppModel {
	public $validate = array(
		'title' => array(
			'rule' => 'notBlank'
		),
		'body' => array(
			'rule' => 'notBlank',
			'rule' => array('maxLength', 300),
			'message' => '300字以内で入力してください'
		)
	);
}
?>
