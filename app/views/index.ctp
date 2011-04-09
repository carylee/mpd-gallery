
	<?php
	$i = 0;
	foreach ($projects as $project):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
<div class="product_box margin_r_10">
<img>
			<?php echo $this->Html->link($project['picture']['filename'], array('controller' => 'projects', 'action' => 'view', $project['project']['id'])); ?>
		</img>
<h3><?php echo $project['Project']['title']; ?>&nbsp;</h3>
<p><?php echo $project['Project']['date_presented']; ?>&nbsp;</p>
</div>


<?php endforeach; ?>





