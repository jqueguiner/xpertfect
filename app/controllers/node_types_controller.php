<?php
class NodeTypesController extends AppController {

	var $name = 'NodeTypes';

	function index() {
		$this->NodeType->recursive = 0;
		$this->set('nodeTypes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid node type', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('nodeType', $this->NodeType->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->NodeType->create();
			if ($this->NodeType->save($this->data)) {
				$this->Session->setFlash(__('The node type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The node type could not be saved. Please, try again.', true));
			}
		}
		$users = $this->NodeType->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid node type', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->NodeType->save($this->data)) {
				$this->Session->setFlash(__('The node type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The node type could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->NodeType->read(null, $id);
		}
		$users = $this->NodeType->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for node type', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->NodeType->delete($id)) {
			$this->Session->setFlash(__('Node type deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Node type was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>