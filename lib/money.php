<?php
class money extends \atk4\data\Model {
	public $table = 'friends';	
	function init() {
		parent::init();
		$this->addField('type');
		$this->addField('amount');
		$this->addField('date');
	}
}