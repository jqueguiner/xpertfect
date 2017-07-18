<?php
class Unity extends AppModel {
	var $name = 'Unity';
	var $displayField = 'unit_description';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'ConversionRate' => array(
			'className' => 'ConversionRate',
			'foreignKey' => 'unity_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>