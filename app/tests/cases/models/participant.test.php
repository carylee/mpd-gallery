<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/Chicago' for 'CDT/-5.0/DST' instead in /Users/cary/Dropbox/mpd-gallery/cake/console/templates/default/classes/test.ctp on line 22
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