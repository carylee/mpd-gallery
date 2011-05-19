<?php

/* MpdClass Test cases generated on: 2011-04-05 22:04:18 : 1302059058*/
App::import('Model', 'MpdClass');

class MpdClassTestCase extends CakeTestCase {
	var $fixtures = array('app.mpd_class', 'app.project', 'app.participant', 'app.picture');

	function startTest() {
		$this->MpdClass =& ClassRegistry::init('MpdClass');
	}

	function endTest() {
		unset($this->MpdClass);
		ClassRegistry::flush();
	}

}
?>
