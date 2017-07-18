<?php
class DecisionModelNode extends AppModel {
	var $name = 'DecisionModelNode';
	var $displayField = 'description';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'NodeType' => array(
			'className' => 'NodeType',
			'foreignKey' => 'node_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'DecisionModel' => array(
			'className' => 'DecisionModel',
			'foreignKey' => 'decision_model_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Father' => array(
			'className' => 'DecisionModelNode',
			'foreignKey' => 'father_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>