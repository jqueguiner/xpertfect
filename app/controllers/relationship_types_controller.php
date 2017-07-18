<?php
class RelationshipTypesController extends AppController {

	var $name = 'RelationshipTypes';

	function index() {
		$this->RelationshipType->recursive = 0;
		$this->set('relationshipTypes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid relationship type', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('relationshipType', $this->RelationshipType->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->RelationshipType->create();
			if ($this->RelationshipType->save($this->data)) {
				$this->Session->setFlash(__('The relationship type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The relationship type could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid relationship type', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->RelationshipType->save($this->data)) {
				$this->Session->setFlash(__('The relationship type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The relationship type could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->RelationshipType->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for relationship type', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->RelationshipType->delete($id)) {
			$this->Session->setFlash(__('Relationship type deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Relationship type was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->RelationshipType->recursive = 0;
		$this->set('relationshipTypes', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid relationship type', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('relationshipType', $this->RelationshipType->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->RelationshipType->create();
			if ($this->RelationshipType->save($this->data)) {
				$this->Session->setFlash(__('The relationship type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The relationship type could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid relationship type', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->RelationshipType->save($this->data)) {
				$this->Session->setFlash(__('The relationship type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The relationship type could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->RelationshipType->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for relationship type', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->RelationshipType->delete($id)) {
			$this->Session->setFlash(__('Relationship type deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Relationship type was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>