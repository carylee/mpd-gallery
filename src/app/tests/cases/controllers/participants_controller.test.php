<?php

/* Participants Test cases generated on: 2011-04-07 18:17:42 : 1302218262*/
App::import('Controller', 'Participants');

class TestParticipantsController extends ParticipantsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ParticipantsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.participant', 'app.project', 'app.picture');

	function startTest() {
		$this->Participants =& new TestParticipantsController();
		$this->Participants->constructClasses();
	}

	function endTest() {
		unset($this->Participants);
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
