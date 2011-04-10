<?php
$i = 0;
foreach ($projects as $project):
  $class = null;
  if ($i++ % 2 == 0) {
    $class = ' class="altrow"';
  }
?>
<div class="product_box margin_r_10">
<?php echo $this->Html->link(
  $this->Html->image($project['Picture'][0]['filename'], array("alt"=>"photo")),
  array(
    'controller' => 'projects',
    'action' => 'view',
    $project['Project']['id'],
  ),
  array(
    'escape'=> false
  )); ?>
<h3><?php echo $project['Project']['title']; ?>&nbsp;</h3>
<p><?php echo $project['Project']['date_presented']; ?>&nbsp;</p>
</div>

<?php endforeach; ?>
