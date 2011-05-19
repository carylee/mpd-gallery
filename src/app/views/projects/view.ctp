<div id="normal-breadcrumbs">
  <a href="/projects">Browse portfolio</a> &gt; <?php echo $project['Project']['title'];?>
</div>
<div class="product_detail_left">
  <div class="product_img_wrapper">
  <?php if (count($project['Picture']) < 1 ): ?>
   <img  src="http://www.nuigalway.ie/mooreinstitute/img/no_image_available_600_600.jpg" width="300" height="280">
  <?php else: 
if ($project['Project']['cover'])//project.cover is the id of cover pic
{
foreach ($project['Picture'] as $picture):
   if ($picture['id']==$project['Project']['cover'])
  //$picture = $this->Pictures->findById($project['Project']['cover']); 
echo $this->Html->image('projects/' . $picture['filename'], array("alt"=>"photo")); endforeach;
}else{
   echo $this->Html->image('projects/' . $project['Picture'][0]['filename'], array("alt"=>"photo"));} ?>
 
  <?php endif; ?>
  </div>
  <br />
  <h2><?php echo $project['Project']['title'];?></h2>
  <p id="product-description"><?php echo $project['Project']['description']; ?></p>
</div>
<div class="product_detail_right">
  <h3>More Pictures</h3>
  <?php if(count($project['Picture']) > 0): ?>
    <div id="more-pictures"> 
    <?php foreach ($project['Picture'] as $picture): ?>
      <?php echo 
        $this->Html->image('projects/' . $picture['filename'], 
        array('alt'=>'thumbnail', 'class'=>'project-thumbnail')); ?>
    <?php endforeach; ?>
    </div>
  <?php endif; ?>
  <br />
  <div id="likes">
      <p><span id="like-count"><?php echo $project['Project']['like'];?></span> people 
<?php 
   if(!$liked) {
     echo $this->Html->link('like', array( 'action'=>'like',$project['Project']['id']), array('id'=>'like'));
   }
   else {
     echo "like";
   }
?>
       this project.</p>
  </div>
  <br />
  <h3>On This Project</h3>
  <?php foreach ($project['Participant'] as $participant): ;?>
<p class="participant"><?php echo $participant['name'];
echo $this->Html->link($this->Html->image('email.png', array('class'=>'email')),
  array('controller'=>'participants','action'=>'email', $participant['id']),
  array('escape'=>false));?></p>
  <?php if($participant['company']): ?>
    <p>Sponsored by <?php echo $participant['company'];?></p>
  <?php else: ?>
    <p>Independant</p>
  <?php endif; ?>

    <br />
  <?php endforeach; ?>
  <h3>Details</h3>
  <p><?php echo $project['Project']['mpd_class'];?></p> <!-- MPD Class-->
  <?php if (isset($project['Project']['date_presented'])): ?>
    <p>Presented: <?php echo $project['Project']['date_presented'];?></p>
  <?php endif; ?>
  <?php if (isset($project['Project']['patent_number'])): ?>
    <p>Patent number: <?php echo $project['Project']['patent_number']; ?></p>
  <?php endif; ?>
  <br />
  <h3>Is This Your Project?</h3>
    <ul class="service_applied">
    </ul>
  <div class="button_01">
  <?php if ($user): ?>
  <?php echo $this->Html->link('Edit project', array('controller'=>'projects', 'action'=>'edit', $project['Project']['id']));?>
  <?php else: ?>
      <?php echo $this->Html->link('Click here', array('controller'=>'users', 'action'=>'login'));?> to log in and edit the page
  <?php endif; ?>
  </div>
</div>
<div class="cleaner"></div>
