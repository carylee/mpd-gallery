<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/Chicago' for 'CDT/-5.0/DST' instead in /Users/cary/Dropbox/mpd-gallery/cake/console/templates/default/classes/test.ctp on line 22
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