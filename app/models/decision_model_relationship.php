<?php
class DecisionModelRelationship extends AppModel {
	var $name = 'DecisionModelRelationship';
	var $displayField = 'id';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'DecisionModel' => array(
			'className' => 'DecisionModel',
			'foreignKey' => 'decision_model_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'RelationshipType' => array(
			'className' => 'RelationshipType',
			'foreignKey' => 'relationship_type_id',
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
		'Prenode' => array(
			'className' => 'DecisionModelNode',
			'foreignKey' => 'prenode_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Sucnode' => array(
			'className' => 'DecisionModelNode',
			'foreignKey' => 'sucnode_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>