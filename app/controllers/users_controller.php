<?php
class UsersController extends AppController {

	var $name = 'Users';

	var $paginate = array(
						'limit' => 20,
						'page' => 1);

	var $helpers = array('Html', 'Javascript', 'Ajax');
	
	
	function login(){
		
		$this->layout = 'login';
	}
	
	function logout(){
		$this->Auth->logout();
		
	}
	
	

	
	
	function index() {
		$this->User->recursive = 0;

		$this->set('users', $this->paginate());
		//$this->layout = 'tables';
		$this->layout = 'empty2';
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
		
		$this->layout = 'forms';
		
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		$groups = $this->User->Group->find('list');
		$projects = $this->User->Project->find('list');
		$this->set(compact('groups', 'projects'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$groups = $this->User->Group->find('list');
		$projects = $this->User->Project->find('list');
		$this->set(compact('groups', 'projects'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	
	
	
	function results($page=0,$limit=100) { 
		$this->layout = "ajax";  //make cake use the ajax layout 
		Configure::write('debug', 0); //Turn off debug info for ajax/json data.
		$productArray = array();  //this will hold our data from the database. 
		$count = $this->User->find('count'); //counts the number of records in Message. 
		$productA = $this->User->find('all', array('fields'=>array('username','group_id'),'limit'=>$limit,'page'=>$page,'order' => 'User.created DESC')); //gets all the Product records and sorts them by date created.
		$productArray = Set::extract($productA, '{n}.User');  //convert $productArray into a json-friendly format 
		
		$this->set('total', $count);  //send total to the view 
		$this->set('page_size',$limit); 
		$this->set('product_list',$productArray);  //send messages to the view
		$test = $this->User->find('all');
		$this->set('test',$test);  
	}
	

	function files($dir){
		$this->layout = "files";
		$startdir = '/files/';
		$ostartdir = '/files/';
		if(isset($dir)){$startdir .= $dir;};
		
		$this->set('ostartdir',$startdir);
		$this->set('startdir',$startdir);
	}
	

}
?>