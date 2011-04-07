<div id="templatemo_content">
<h2><?php echo $project['Project']['title'];?></h2>
  <div class="product_detail_left">
    <div class="product_img_wrapper">
      <?php if (count($project['Picture']) < 1 ): ?>
      <img src="http://placekitten.com/500/300">
      <?php else: ?>
      <img src="<?php echo $project['Picture'][0]['url'];?>" alt="product" /></div>
      <?php endif; ?>
    </div>
  <br />
  <h3 style="color: rgb(0, 0, 0);">Product Description</h3>
  <p id="product-description"><?php echo $project['Project']['description']; ?></p>
  </div>
  <div class="product_detail_right">
  <h3>In This Project</h3>
    <?php foreach ($project['Participant'] as $participant): ;?>
      <p class="participant"><?php echo $participant['name']; ?></p>
      <p>Sponsered by <?php echo $participant['company'];?></p>
      <br />
    <?php endforeach; ?>
  <h3>More Pictures</h3>
  <div> <a href="work_detail.html"><img
  src="" alt="image" height="70" width="70" /></a>
  <a href="work_detail.html"><img src="images/templatemo_image_04.jpg"
   alt="image" height="70" width="70" /></a><a href="work_detail.html"><img
   src="images/templatemo_image_05.jpg" alt="image" height="70" width="70" /></a><a
   href="work_detail.html"><img src="images/templatemo_image_06.jpg"
   alt="image" height="70" width="70" /></a><a href="work_detail.html"><img
   src="images/templatemo_image_02.jpg" alt="image" height="70" width="70" /></a></div>
  <br />
  <h3>Details</h3>
  <p><?php echo $project['Project']['mpd_class'];?></p> <!-- MPD Class-->
  <p>Presented: <?php echo $project['Project']['date_presented'];?></p>
  <p>Patent number: <?php echo $project['Project']['patent_number']; ?></p>
  <br />
  <h3>Is This Your Project?</h3>
  <ul class="service_applied">
  </ul>
  <div class="button_01"><a href="loginPage.html" target="_parent">Click
  here</a>to log in and edit the page
  </div>
  </div>
<div class="cleaner"></div>
