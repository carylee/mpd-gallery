<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/Chicago' for 'CDT/-5.0/DST' instead in /Users/cary/Dropbox/mpd-gallery/cake/console/templates/default/classes/test.ctp on line 22
/* Roles Test cases generated on: 2011-04-12 22:07:30 : 1302664050*/
App::import('Controller', 'Roles');

class TestRolesController extends RolesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RolesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.role');

	function startTest() {
		$this->Roles =& new TestRolesController();
		$this->Roles->constructClasses();
	}

	function endTest() {
		unset($this->Roles);
		ClassRegistry::flush();
	}

}
?>