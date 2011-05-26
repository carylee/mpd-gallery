<?php
class ProjectWebTestCase extends CakeWebTestCase {

  function ProjectWebTestCase() {
    $this->baseurl = "http://mpdd-staging.caryme.com";
  }

  function testShareOnTwitter() {
    $this->get($this->baseurl . '/projects/view/4');
    $this->assertText("Tweet");
  }

  function testLikeShouldIncreaseCount() {
    $this->get($this->baseurl . '/projects/view/4');
    $this->click("like");
  }
}

?>
