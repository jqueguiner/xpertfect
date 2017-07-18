<?php
class RelationshipType extends AppModel {
	var $name = 'RelationshipType';
	var $displayField = 'description';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'DecisionModelRelationship' => array(
			'className' => 'DecisionModelRelationship',
			'foreignKey' => 'relationship_type_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'ProjectRelationship' => array(
			'className' => 'ProjectRelationship',
			'foreignKey' => 'relationship_type_id',
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