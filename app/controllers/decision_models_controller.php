<?php
class DecisionModelsController extends AppController {

	var $name = 'DecisionModels';


	function beforeFilter(){
		$this->Auth->Allow('index');
	}
	
	function index() {
		$this->DecisionModel->recursive = 0;
		$this->set('decisionModels', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid decision model', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('decisionModel', $this->DecisionModel->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->DecisionModel->create();
			if ($this->DecisionModel->save($this->data)) {
				$this->Session->setFlash(__('The decision model has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The decision model could not be saved. Please, try again.', true));
			}
		}
		$users = $this->DecisionModel->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid decision model', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->DecisionModel->save($this->data)) {
				$this->Session->setFlash(__('The decision model has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The decision model could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DecisionModel->read(null, $id);
		}
		$users = $this->DecisionModel->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for decision model', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DecisionModel->delete($id)) {
			$this->Session->setFlash(__('Decision model deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Decision model was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>