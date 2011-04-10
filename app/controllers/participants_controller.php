<?php
class ParticipantsController extends AppController {

	var $name = 'Participants';
	/************************Tina Added This Line*****************************************/
    var $components = array('Email');
	/*************************************************************************************/
	function index() {
		$this->Participant->recursive = 0;
		$this->set('participants', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid participant', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('participant', $this->Participant->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Participant->create();
			if ($this->Participant->save($this->data)) {
				$this->Session->setFlash(__('The participant has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participant could not be saved. Please, try again.', true));
			}
		}
		$projects = $this->Participant->Project->find('list');
		$this->set(compact('projects'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid participant', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Participant->save($this->data)) {
				$this->Session->setFlash(__('The participant has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participant could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Participant->read(null, $id);
		}
		$projects = $this->Participant->Project->find('list');
		$this->set(compact('projects'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for participant', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Participant->delete($id)) {
			$this->Session->setFlash(__('Participant deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Participant was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Participant->recursive = 0;
		$this->set('participants', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid participant', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('participant', $this->Participant->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Participant->create();
			if ($this->Participant->save($this->data)) {
				$this->Session->setFlash(__('The participant has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participant could not be saved. Please, try again.', true));
			}
		}
		$projects = $this->Participant->Project->find('list');
		$this->set(compact('projects'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid participant', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Participant->save($this->data)) {
				$this->Session->setFlash(__('The participant has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participant could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Participant->read(null, $id);
		}
		$projects = $this->Participant->Project->find('list');
		$this->set(compact('projects'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for participant', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Participant->delete($id)) {
			$this->Session->setFlash(__('Participant deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Participant was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	/************************Tina Added From Here*******************************/
	function email($id=null){
	/   if (!$id) {
			$this->Session->setFlash(__('Invalid id for participant', true));
			$this->redirect(array('action'=>'index'));
		}    //Do we need to check first???????
	    $this->Email->to = $Participant['id']['email'];//Not sure how to get email of participant
        $this->Email->subject = $this->data['subject'];
        $this->Email->replyTo = $this->data['email'];
        $this->Email->from = $this->data['name']; 
        //Set the body of the mail as we send it. 
        //Note: the text can be an array, each element will appear as a 
        //seperate line in the message body. 
        if ( $this->Email->send($this->data['content']) ) { 
            $this->Session->setFlash('Simple email sent'); 
        } else { 
            $this->Session->setFlash('Simple email not sent'); 
        } 
        $this->redirect('/'); 
		
	}
     /**************************************************************************/
	
}
?>