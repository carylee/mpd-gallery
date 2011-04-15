<?php
class UsersController extends AppController {

	var $name = 'Users';
  var $components = array('Acl');

  function login() {
  }

  function logout() {
    $this->redirect($this->Auth->logout());
  }

  function createAros() {
    $aro =& $this->Acl->Aro;
    
    //Here's all of our group info in an array we can iterate through
    $groups = array(
      0 => array(
        'alias' => 'admins'
      ),
      1 => array(
        'alias' => 'students'
      ),
      2 => array(
        'alias' => 'visitors'
      ),
    );
    
    //Iterate and create ARO groups
    foreach($groups as $data)
    {
      $aro->create();
      
      //Save data
      $aro->save($data);
    }
  }


	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function changePassword($id=null) { 
                if (empty($this->data)) { 
                    $this->data = $this->User->findById($id); 
                   } 
                else { 
                 	$this->User->id = $this->Session->read('user_id'); 
                    $uid = $this->User->findById($this->User->id); 
                    if($this->data['User']['old_password']!= $uid['User']['password']) 
                        { 
                            $this->Session->setFlash(__("Your old Password field didn't match",true)); 
                        } 
                        else if($this->data['User']['new_password'] != $this->data['User'] ['confirm_password'] )
						{ 
                            $this->Session->setFlash(__("new passwords don't match. Please, try again.", true)); 
                        } 
                        else 
						{ 
                            $this->data['User']['password'] = $this->data['User']['new_password']; 
                            $this->data['User']['id'] = $this->User->id; 
                            if($this->User->save($this->data)) { 
                                   $this->Session->setFlash("Password updated"); 
                                   $this->redirect(array('action' => 'index'));
                                } 
                        } 
                 } 
        } 
}
?>
