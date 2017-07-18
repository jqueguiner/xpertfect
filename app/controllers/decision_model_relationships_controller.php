<?php
class DecisionModelRelationshipsController extends AppController {

	var $name = 'DecisionModelRelationships';

	function admin_index() {
		$this->DecisionModelRelationship->recursive = 0;
		$this->set('decisionModelRelationships', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid decision model relationship', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('decisionModelRelationship', $this->DecisionModelRelationship->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->DecisionModelRelationship->create();
			if ($this->DecisionModelRelationship->save($this->data)) {
				$this->Session->setFlash(__('The decision model relationship has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The decision model relationship could not be saved. Please, try again.', true));
			}
		}
		$decisionModels = $this->DecisionModelRelationship->DecisionModel->find('list');
		$relationshipTypes = $this->DecisionModelRelationship->RelationshipType->find('list');
		$users = $this->DecisionModelRelationship->User->find('list');
		$prenodes = $this->DecisionModelRelationship->Prenode->find('list');
		$sucnodes = $this->DecisionModelRelationship->Sucnode->find('list');
		$this->set(compact('decisionModels', 'relationshipTypes', 'users', 'prenodes', 'sucnodes'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid decision model relationship', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->DecisionModelRelationship->save($this->data)) {
				$this->Session->setFlash(__('The decision model relationship has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The decision model relationship could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DecisionModelRelationship->read(null, $id);
		}
		$decisionModels = $this->DecisionModelRelationship->DecisionModel->find('list');
		$relationshipTypes = $this->DecisionModelRelationship->RelationshipType->find('list');
		$users = $this->DecisionModelRelationship->User->find('list');
		$prenodes = $this->DecisionModelRelationship->Prenode->find('list');
		$sucnodes = $this->DecisionModelRelationship->Sucnode->find('list');
		$this->set(compact('decisionModels', 'relationshipTypes', 'users', 'prenodes', 'sucnodes'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for decision model relationship', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DecisionModelRelationship->delete($id)) {
			$this->Session->setFlash(__('Decision model relationship deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Decision model relationship was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>