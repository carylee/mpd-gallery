<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
    MPDD Product Gallery
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
    echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js');
    echo $this->Html->script('mpdgallery');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('main');

		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<!--<div id="header">
			<h1><?php echo $this->Html->link(__('CakePHP: the rapid development php framework', true), 'http://cakephp.org'); ?></h1>
		</div>-->
  <div id="templatemo_banner_wrapper">
  <div id="templatemo_menu">
  <ul>
  <!-- class="current"--> <li><a href="http://www.mpd.northwestern.edu/"><span>MPD2</span></a></li>
    <li><a href="http://www.mpd.northwestern.edu/nes/upcoming_events.php"><span>events
 </span></a></li>
    <li><a href="http://www.mpd.northwestern.edu/curriculum/overview.php"><span>curriculum</span></a></li>
    <li><a href="http://www.mpd.northwestern.edu/mastersprogram/admission.php"><span>master's
  program</span></a></li>
    <li><a href="http://www.mpd.northwestern.edu/students/current_students.php"><span>students+alumni</span></a></li>
    <li><a href="http://www.mpd.northwestern.edu/executive/overview.php"><span>executive
  education</span></a></li>
    <li><a href="http://www.mpd.northwestern.edu/faq/contact.php"><span>info</span></a></li>
  </ul>
  </div>
  <br>
  <br>
<div id="user-status">
  <?php if(isset($user)): ?>
  <p>Logged in as <?php echo $user; ?> | <?php echo $this->Html->link('Manage', array('controller'=>'projects', 'action'=>'manage')); ?>
 | <?php echo $this->Html->link('Log out', array('controller'=>'users','action'=>'logout')); ?>
  <?php else: ?>
  <p><?php echo $this->Html->link('Log in', array('controller'=>'users', 'action'=>'login')); ?></p>
  <?php endif; ?>
</div>
  <!-- end of templatemo_banner --></div>
  <!-- end of templatemo_banner_wrapper -->
  <div class="cleaner"></div>

		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
		</div>
	</div>
<div id="templatemo_content_bottom"></div>
<div id="templatemo_footer_wrapper">
<div id="templatemo_footer"><br />
</div>
<!-- end of footer -->
<div class="cleaner"></div>
</div>
<!-- end of templatemo_footer_wrapper -->
</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
