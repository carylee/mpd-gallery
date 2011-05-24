<?php
class ProjectWebTestCase extends CakeWebTestCase {

  function ProjectWebTestCase() {
    $this->baseurl = "http://mpd";
  }

  function testShareOnTwitter() {
    $this->get($this->baseurl . '/projects/view/4');
    $this->assertText("Tweet");
  }
}

?>
