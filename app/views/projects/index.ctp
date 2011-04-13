<h1>MPD2 Product Gallery</h1>
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
<?php echo $this->Html->image('projects/' . $project['Picture'][0]['filename'], array("alt"=>"photo")); ?>
<h3><?php echo $project['Project']['title']; ?>&nbsp;</h3>
<p><?php echo $project['Project']['date_presented']; ?>&nbsp;</p>
</div>
</a>

<?php endforeach; ?>
