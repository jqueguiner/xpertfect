<?php
class DecisionModelNodesController extends AppController {

	var $name = 'DecisionModelNodes';

	function index() {
		$this->DecisionModelNode->recursive = 0;
		$this->set('decisionModelNodes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid decision model node', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('decisionModelNode', $this->DecisionModelNode->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->DecisionModelNode->create();
			if ($this->DecisionModelNode->save($this->data)) {
				$this->Session->setFlash(__('The decision model node has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The decision model node could not be saved. Please, try again.', true));
			}
		}
		$nodeTypes = $this->DecisionModelNode->NodeType->find('list');
		$decisionModels = $this->DecisionModelNode->DecisionModel->find('list');
		$users = $this->DecisionModelNode->User->find('list');
		$decisionModelNodes = $this->DecisionModelNode->find('all');
		$this->set(compact('nodeTypes', 'decisionModels', 'users', 'decisionModelNodes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid decision model node', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->DecisionModelNode->save($this->data)) {
				$this->Session->setFlash(__('The decision model node has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The decision model node could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DecisionModelNode->read(null, $id);
		}
		$nodeTypes = $this->DecisionModelNode->NodeType->find('list');
		$decisionModels = $this->DecisionModelNode->DecisionModel->find('list');
		$users = $this->DecisionModelNode->User->find('list');
		$decisionModelNodes = $this->DecisionModelNode->DecisionModelNode->find('list');
		$this->set(compact('nodeTypes', 'decisionModels', 'users', 'decisionModelNodes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for decision model node', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DecisionModelNode->delete($id)) {
			$this->Session->setFlash(__('Decision model node deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Decision model node was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>