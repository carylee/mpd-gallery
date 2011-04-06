<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/Chicago' for 'CDT/-5.0/DST' instead in /Users/cary/Dropbox/mpd-gallery/cake/console/templates/default/classes/test.ctp on line 22
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