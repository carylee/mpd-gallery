<?php
class PicturesController extends AppController {

	var $name = 'Pictures';
	//var $helpers = array('Html', 'Form');
	var $components = array('Upload');


	/*function add() {
		if (!empty($this->data)) {
      //pr($this->data);
      $this->Picture->create();
			if ($this->Picture->save($this->data)) {
        $this->Session->setFlash(__('The picture has been saved', true));
        $this->redirect(array('action' => 'index'));
			} else {
        $this->Session->setFlash(__('The picture could not be saved. Please, try again.', true));
			}
		}
		$projects = $this->Picture->Project->find('list');
		$this->set(compact('projects'));
  }*/

 function add() {

		if (empty($this->data)) {
			$this->render();
		} else {
			//$this->cleanUpFields();

			// set the upload destination folder
			$destination = realpath('../../app/webroot/img/') . '/';
			// grab the file
			$file = $this->data['Picture']['images'];

			// upload the picture using the upload component
			$result = $this->Upload->upload($file, $destination, null, array('type' => 'resizecrop', 
					'size' => array('400', '300'), 'output' => 'jpg'));

			if (!$result){
				$this->data['Picture']['images'] = $this->Upload->result;
			} else {
				// display error
				$errors = $this->Upload->errors;
   
				// piece together errors
				if(is_array($errors)){ $errors = implode("<br />",$errors); }
   
					$this->Session->setFlash($errors);
					$this->redirect('/pictures/upload');
					exit();
				}
			if ($this->picture->save($this->data)) {
				$this->Session->setFlash('picture has been added.');
				$this->redirect('/pictures/index');
			} else {
				$this->Session->setFlash('Please correct errors below.');
				unlink($destination.$this->Upload->result);
			}
		}
	}

	function index() {
		$this->Picture->recursive = 0;
		$this->set('pictures', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid picture', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('picture', $this->Picture->read(null, $id));
	}



	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid picture', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Picture->save($this->data)) {
				$this->Session->setFlash(__('The picture has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The picture could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Picture->read(null, $id);
		}
		$projects = $this->Picture->Project->find('list');
		$this->set(compact('projects'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for picture', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Picture->delete($id)) {
			$this->Session->setFlash(__('Picture deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Picture was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Picture->recursive = 0;
		$this->set('pictures', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid picture', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('picture', $this->Picture->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Picture->create();
			if ($this->Picture->save($this->data)) {
				$this->Session->setFlash(__('The picture has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The picture could not be saved. Please, try again.', true));
			}
		}
		$projects = $this->Picture->Project->find('list');
		$this->set(compact('projects'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid picture', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Picture->save($this->data)) {
				$this->Session->setFlash(__('The picture has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The picture could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Picture->read(null, $id);
		}
		$projects = $this->Picture->Project->find('list');
		$this->set(compact('projects'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for picture', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Picture->delete($id)) {
			$this->Session->setFlash(__('Picture deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Picture was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
