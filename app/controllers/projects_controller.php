<?php
class ProjectsController extends AppController {

	var $name = 'Projects';

	function index() {
    date_default_timezone_set('America/Chicago');
		//$this->Project->recursive = 1;
		//$this->set('projects', $this->paginate());
    $projects = $this->Project->find('all', array('recursive'=>1));
    foreach($projects as $index=>$project) {
      $timestamp = strtotime($project['Project']['date_presented']);
      $projects[$index]['Project']['prettyDate'] = date('F jS, Y', $timestamp);
    }
    $this->set('projects', $projects);
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid project', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('project', $this->Project->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Project->create();
			if ($this->Project->saveAll($this->data)) {
				$this->Session->setFlash(__('The project has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project could not be saved. Please, try again.', true));
			}
		}
	}

  
  function stripEmptyParticipants( &$data ) {
    foreach($data['Participant'] as $index=>$participant) {
      if($participant['name'] == "") {
        unset($data['Participant'][$index]);
      }
    }
  }

  function stripEmptyFiles( &$data ) {
    foreach($data['Picture'] as $index=>$picture) {
      if(!$picture['filename']) {
        unset($data['Picture'][$index]);
      }
    }
  }

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid project', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
      $this->stripEmptyParticipants($this->data);
      $this->stripEmptyFiles($this->data);
			if ($this->Project->saveAll($this->data,array('validate'=>'first'))) {
				$this->Session->setFlash(__('The project has been saved', true));
				$this->redirect(array('action' => 'view', $this->data['Project']['id']));
			} else {
				$this->Session->setFlash(__('The project could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
      $this->Project->recursive = 1;
			$this->data = $this->Project->read(null, $id);
      $this->set('project', $this->data);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for project', true));
			$this->redirect(array('action'=>'manage'));
		}
		if ($this->Project->delete($id)) {
			$this->Session->setFlash(__('Project deleted', true));
			$this->redirect(array('action'=>'manage'));
		}
		$this->Session->setFlash(__('Project was not deleted', true));
		$this->redirect(array('action' => 'manage'));
	}
	function manage() {
		$this->Project->recursive = 0;
		$this->set('projects', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid project', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('project', $this->Project->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Project->create();
			if ($this->Project->save($this->data)) {
				$this->Session->setFlash(__('The project has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project could not be saved. Please, try again.', true));
			}
		}
	}
		function setCover($id=null,$picid=null)
	{
	  
		 if (   $this->Project->saveField('cover',$picid)){
			$this->Session->setFlash(__('Project Cover Updated!', true));
			$this->redirect(array('action'=>'edit',$id));
		}
		else
		{
		     $this->Session->setFlash(__('Set Cover failed. Please, try again', true));
			 $this->redirect(array('action'=>'edit',$id));
		}
	}
	
  function like($id=null,$newlike=null)
    {
	  /*  if (!$id || !$newlike)
		{
		     $this->Session->setFlash(__('sorry, please try again', true));
			 $this->redirect(array('action'=>'view',$id));
		}*/
		if ( $this->Project->saveField('like',$newlike))
		{
		     //$this->Session->setFlash(__('Thanks!', true));
			 $this->redirect(array('action'=>'view',$id));
		}
		else
		{
		     $this->Session->setFlash(__('Sorry, try again', true));
			 $this->redirect(array('action'=>'view',$id));
		}
	}

	/*function setCover($id=null,$picorder=null)
	{
	    if ($id && $picorder)
		{
		    $this->Project->saveField('cover',$picorder);
			$this->Session->setFlash(__('Project Cover Updated!', true));
			$this->redirect(array('action'=>'edit',$id));
		}
		else
		{
		     $this->Session->setFlash(__('Set Cover failed. Please, try again', true));
			 $this->redirect(array('action'=>'edit',$id));
		}
	}*/

	/*function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid project', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Project->saveAll($this->data,array('validate'=>'first'))) {
				$this->Session->setFlash(__('The project has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Project->read(null, $id);
		}
  }*/


	/*function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for project', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Project->delete($id)) {
			$this->Session->setFlash(__('Project deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Project was not deleted', true));
		$this->redirect(array('action' => 'index'));
  }*/

  function beforeFilter() {
    $this->Auth->allow('index','view','like');
  }
}
?>
