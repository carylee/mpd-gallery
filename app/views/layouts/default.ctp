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
		<?php __('CakePHP: the rapid development php framework:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

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
  <!-- class="current"--> <li><a href="#"><span>MPD2</span></a></li>
    <li><a href="#"><span>events
  news seminars</span></a></li>
    <li><a href="#"><span>curriculum</span></a></li>
    <li><a href="#"><span>master's
  program</span></a></li>
    <li><a href="#"><span>students+alumni</span></a></li>
    <li><a href="#"><span>executive
  education</span></a></li>
    <li><a href="#"><span>info</span></a></li>
  </ul>
  </div>
  <!-- end of templatemo_banner --></div>
  <!-- end of templatemo_banner_wrapper -->
  <div class="cleaner"></div>

		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
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
