<?php
class Friends extends \atk4\data\Model {
	public $table = 'friends';	
	function init() {
		parent::init();
		$this->addField('name');
		$this->addField('email');
	}
}