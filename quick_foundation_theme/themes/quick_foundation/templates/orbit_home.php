<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
  <div class="row">
    <div class="large-3 columns">
      <?php 
      $a = new GlobalArea('Site Name');
      $a->display();
      ?>
    </div>
    <div class="large-9 columns">
     <?php
     $a = new GlobalArea('Header Nav');
     $a->display();
     ?>
  </div>
  </div>
  
<!-- End Header and Nav -->

<!-- First Band (Slider) -->

  <div class="row">
    <div class="large-12 columns">
      <?php 
      $a = new Area('Header Image');
      $a->display($c);
      ?>
    <hr />
    </div>
  </div>
  
<!-- Three-up Content Blocks -->

	<div class="row">
		<div class="large-4 columns">
      <?php 
      $a = new Area('Left Column');
      $a->display($c);
      ?>
    </div>
    
    <div class="large-4 columns">
      <?php 
      $a = new Area('Center Column');
      $a->display($c);
      ?>
    </div>
    
    <div class="large-4 columns">
      <?php 
      $a = new Area('Right Column');
      $a->display($c);
      ?>
    </div>
	
    </div>
    
<!-- Call to Action Panel -->
<div class="row">
    <div class="large-12 columns">
      <?php 
      $a = new Area('Main');
      $a->display($c);
      ?>
    </div>
  </div>

  <!-- Footer -->
  
  <footer class="row">
    <div class="large-12 columns">
      <hr />
      <div class="row">
        <div class="large-6 columns">
          <?php $this->inc('elements/footer_copyright.php'); ?>
        </div>
        <div class="large-6 columns">
          <div class="right">
            <?php $this->inc('elements/footer_sign_in.php'); ?>
          </div>
        </div>
      </div>
    </div> 
  </footer>
