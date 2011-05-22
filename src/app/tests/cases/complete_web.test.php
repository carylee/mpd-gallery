<?php

class CompleteWebTestCase extends CakeWebTestCase {

  function CompleteWebTestCase() {
    //$port = '8888';
    //$host = 'appmojo';
    //$this->baseurl = 'http://' . $host . ':' . $port;
    $this->baseurl = 'http://localhost';	
  }
  
  /*---------------- DATABASE CLEANUP STUFF -----------------*/
  
  function select_from() {
    $link = mysql_connect('localhost', 'root', '');
    if (!$link) {
      die('Could not connect: ' . mysql_error());
    }

    //Assume the database name is "test"
    //mysql_select_db ('test');

    $query = "Select * from users";
    $mysql_result = @ mysql_query ($query)
      or die ("Query '$query' failed with error message: \"" . mysql_error () . '"');
    mysql_close($link);
  }
  
  /* LOGIN FORM TESTS */
  
  function getBlankLoginForm() {
    $this->get($this->baseurl . "/users/login");
    $this->assertField('data[User][username]', '');
    $this->assertField('data[User][password]', '');
  }

  # make sure you can't get in without login credentials
  function testLoginNoCredentialsFails() {
    $this->getBlankLoginForm();
    $this->click('Login');
    $this->assertText('Login failed');
  }

function testLoginGoesToProjects() {
    $this->restart();  # restarts the browser as if a new session
    $this->get($this->baseurl . "/users/login");
    $this->assertText('Browse');
    $this->assertField('data[User][username]', '');
    //Our admin account is username:admin password:hello
    $this->setField('data[User][username]', 'admin');
    $this->setField('data[User][password]', 'hello');
    $this->click('Login');
    $this->assertText('Logged in as');
    $this->assertText('Manage');
    $this->clickLink('Manage');
    $this->clickLink('Add a new user');
    $this->assertText('Actions');

  }
}

?>

