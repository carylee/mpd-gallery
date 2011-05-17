<?php

class ManageTest extends CakeWebTestCase{
function ManageTest(){
$host = 'localhost';
$this->baseurl = 'http://'.$host;
}

function Managerlogin(){
$this->get($this->baseurl."users/login");
$this->assertField('data[User][username]','admin');
$this->assertField('data[User][password]','hello');
$this->click('Login');
}

function testManageUsers(){
$this->Managerlogin();
$this->get($this->baseurl."/users/manage");
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