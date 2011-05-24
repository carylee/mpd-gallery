<?php
/* Status Test cases generated on: 2011-05-23 18:04:06 : 1306191846*/
App::import('Model', 'Status');

class StatusTestCase extends CakeTestCase {
	var $fixtures = array('app.status', 'app.project', 'app.participant', 'app.picture');

	function startTest() {
		$this->Status =& ClassRegistry::init('Status');
	}

	function endTest() {
		unset($this->Status);
		ClassRegistry::flush();
	}

}
?>