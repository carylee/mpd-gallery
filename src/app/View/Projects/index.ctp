<h1>MPD&#178; Product Gallery</h1>
<?php
$i = 0;
foreach ($projects as $project):
  $class = null;
  if ($i++ % 2 == 0) {
    $class = ' class="altrow"';
  }
?>
  <a href="<?php echo $this->Html->url(array(
    'controller'=>'projects',
    'action'=>'view',
    $project['Project']['id'],
  ));?>">
<div class="product_box margin_r_10">
<?php
     if (count($project['Picture']) < 1 ): ?>
      <img src="http://www.nuigalway.ie/mooreinstitute/img/no_image_available_600_600.jpg">
  <?php else:  if ($project['Project']['cover'])//project.cover is the id of cover pic
	{
	foreach ($project['Picture'] as $picture):
	   if ($picture['id']==$project['Project']['cover'])
	  //$picture = $this->Pictures->findById($project['Project']['cover']); 
	echo $this->Html->image('projects/' . $picture['filename'], array("alt"=>"photo")); endforeach;
	}else{
     echo $this->Html->image('projects/' . $project['Picture'][0]['filename'], array("alt"=>"photo"));} endif;?>
<h3><?php echo $project['Project']['title']; ?>&nbsp;</h3>
<p class='mpd_class'><?php echo $project['Project']['mpd_class']; ?></p>
<p class='presentation_date'><?php echo $project['Project']['prettyDate']; ?>&nbsp;</p>
</div>
</a>

<?php endforeach; ?>
