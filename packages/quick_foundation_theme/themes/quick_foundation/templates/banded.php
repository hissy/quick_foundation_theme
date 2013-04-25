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


  <!-- First Band (Image) -->

  <div class="row">
    <div class="large-12 columns">
      <?php 
      $a = new Area('Header Image');
      $a->display($c);
      ?>
      <hr>
    </div>
  </div>
  <!-- Second Band (Image Left with Text) -->

  <div class="row">
    <div class="large-4 columns">
      <?php 
      $a = new Area('Sidebar');
      $a->display($c);
      ?>
    </div>
    <div class="large-8 columns">
      <?php 
      $a = new Area('Main');
      $a->display($c);
      ?>
    </div>
  </div>


  <!-- Third Band (Image Right with Text) -->

  <div class="row">
    <div class="large-8 columns">
      <?php 
      $a = new Area('Main Bottom');
      $a->display($c);
      ?>
    </div>
    <div class="large-4 columns">
      <?php 
      $a = new Area('Sidebar Bottom');
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
