<?php
class MpdClassesController extends AppController {

	var $name = 'MpdClasses';

	function index() {
		$this->MpdClass->recursive = 0;
		$this->set('mpdClasses', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid mpd class', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('mpdClass', $this->MpdClass->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->MpdClass->create();
			if ($this->MpdClass->save($this->data)) {
				$this->Session->setFlash(__('The mpd class has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mpd class could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid mpd class', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->MpdClass->save($this->data)) {
				$this->Session->setFlash(__('The mpd class has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mpd class could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->MpdClass->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for mpd class', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->MpdClass->delete($id)) {
			$this->Session->setFlash(__('Mpd class deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Mpd class was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->MpdClass->recursive = 0;
		$this->set('mpdClasses', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid mpd class', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('mpdClass', $this->MpdClass->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->MpdClass->create();
			if ($this->MpdClass->save($this->data)) {
				$this->Session->setFlash(__('The mpd class has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mpd class could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid mpd class', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->MpdClass->save($this->data)) {
				$this->Session->setFlash(__('The mpd class has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mpd class could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->MpdClass->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for mpd class', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->MpdClass->delete($id)) {
			$this->Session->setFlash(__('Mpd class deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Mpd class was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>