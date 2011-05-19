<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/Chicago' for 'CDT/-5.0/DST' instead in /Users/cary/Dropbox/mpd-gallery/cake/console/templates/default/classes/test.ctp on line 22
/* MpdClasses Test cases generated on: 2011-04-05 22:05:46 : 1302059146*/
App::import('Controller', 'MpdClasses');

class TestMpdClassesController extends MpdClassesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MpdClassesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.mpd_class', 'app.project', 'app.participant', 'app.picture');

	function startTest() {
		$this->MpdClasses =& new TestMpdClassesController();
		$this->MpdClasses->constructClasses();
	}

	function endTest() {
		unset($this->MpdClasses);
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