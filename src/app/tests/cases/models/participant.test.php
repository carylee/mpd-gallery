<?php

/* Participant Test cases generated on: 2011-04-07 18:16:38 : 1302218198*/
App::import('Model', 'Participant');

class ParticipantTestCase extends CakeTestCase {
	var $fixtures = array('app.participant', 'app.project', 'app.picture');

	function startTest() {
		$this->Participant =& ClassRegistry::init('Participant');
	}

	function endTest() {
		unset($this->Participant);
		ClassRegistry::flush();
	}

}
?>
