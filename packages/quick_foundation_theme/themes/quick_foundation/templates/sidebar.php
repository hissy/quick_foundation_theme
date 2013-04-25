<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<!-- Header and Nav -->
  
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
  
  
  <div class="row">    
    
    <!-- Main Content Section -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="large-9 push-3 columns">
      <?php 
      $a = new Area('Main');
      $a->display($c);
      ?>
    </div>
    
    
    <!-- Nav Sidebar -->
    <!-- This is source ordered to be pulled to the left on larger screens -->
    <div class="large-3 pull-9 columns">
      <?php 
      $a = new Area('Sidebar');
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
