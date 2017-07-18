<?php
/* RelationshipTypes Test cases generated on: 2011-04-16 05:26:24 : 1302931584*/
App::import('Controller', 'RelationshipTypes');

class TestRelationshipTypesController extends RelationshipTypesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RelationshipTypesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.relationship_type', 'app.decision_model_relationship', 'app.decision_model', 'app.user', 'app.right', 'app.activity', 'app.activity_type', 'app.decision_model_node', 'app.node_type', 'app.project_activity', 'app.project_relationship', 'app.project', 'app.users_project');

	function startTest() {
		$this->RelationshipTypes =& new TestRelationshipTypesController();
		$this->RelationshipTypes->constructClasses();
	}

	function endTest() {
		unset($this->RelationshipTypes);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
?>