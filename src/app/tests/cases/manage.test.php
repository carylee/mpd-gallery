<?php
class ManageTest extends CakeWebTestCase{
function ManageTest(){
	$this->baseurl =$this->base;
}

function testManageUsers(){
$this->get($this->baseurl."/users/manage");
//$this->click('add a new user');
$this->get($this->baseurl."/users/add");
$this->verifyAddNewUserFormDisplayed();
$this->addUserTest();
}

function verifyAddNewUserFormDisplayed(){
$this->assertField('data[User][username]','');
$this->assertField('data[User][password]','');
}

function addUserTest(){
$this->setField('data[User][username]','hitina');
$this->setField('data[User][password]','mpd');
$this->click('Submit');

}
}
?>
