<?php

/* Picture Test cases generated on: 2011-04-07 18:17:03 : 1302218223*/
App::import('Model', 'Picture');

class PictureTestCase extends CakeTestCase {
	var $fixtures = array('app.picture', 'app.project', 'app.participant');

	function startTest() {
		$this->Picture =& ClassRegistry::init('Picture');
	}

	function endTest() {
		unset($this->Picture);
		ClassRegistry::flush();
	}

}
?>
