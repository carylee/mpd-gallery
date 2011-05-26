<?php

/* Projects Test cases generated on: 2011-04-07 18:18:21 : 1302218301*/
App::import('Controller', 'Projects');

class TestProjectsController extends ProjectsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProjectsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.project', 'app.participant', 'app.picture');

	function startTest() {
		$this->Projects =& new TestProjectsController();
		$this->Projects->constructClasses();
	}

	function endTest() {
		unset($this->Projects);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

  function testLike() {
    $this->Project =& ClassRegistry::init('Project');
    $id = 4;
    $project = $this->Project->findById($id);
    debug($project);
    $likes = $project['Project']['like'];
    $result = $this->testAction("/projects/like/$id",
      array('return' => 'vars')
    );
    debug($result);
    $result = $this->testAction("/projects/like/$id",
      array('return' => 'vars')
    );
    debug($result);
    //$this->AssertEqual($likes+1, $newLikes);
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
