<div id="templatemo_content">
  <div class="product_detail_left">
    <div id="breadcrumbs">
      <a href="/projects">Browse portfolio</a> &gt; <?php echo $project['Project']['title'];?>
    </div>
    <div class="product_img_wrapper">
    <?php if (count($project['Picture']) < 1 ): ?>
      <img src="http://placekitten.com/500/300">
    <?php else: ?>
      <?php echo $this->Html->image($project['Picture'][0]['filename'], array('alt'=>'product')); ?>
    <?php endif; ?>
    </div>
    <br />
    <h2><?php echo $project['Project']['title'];?></h2>
    <p id="product-description"><?php echo $project['Project']['description']; ?></p>
  </div>
  <div class="product_detail_right">
    <h3>On This Project</h3>
    <?php foreach ($project['Participant'] as $participant): ;?>
      <p class="participant"><?php echo $participant['name']; ?></p>
      <p>Sponsored by <?php echo $participant['company'];?></p>
      <br />
    <?php endforeach; ?>
    <h3>More Pictures</h3>
    <?php if(count($project['Picture']) > 0): ?>
      <div id="more-pictures"> 
      <?php foreach ($project['Picture'] as $picture): ?>
        <a href="#"><img src="<?php echo $picture['filename']; ?>" alt="thumbnail" /></a>
      <?php endforeach; ?>
      </div>
    <?php endif; ?>
    <br />
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
      <a href="loginPage.html" target="_parent">Click here</a>to log in and edit the page
    </div>
  </div>
  <div class="cleaner"></div>
</div>
