<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<!-- Nav Bar -->

  <div class="row">
    <div class="large-12 columns">
      <div class="nav-bar right">
       <?php
       $a = new GlobalArea('Header Nav');
       $a->display();
       ?>
      </div>
      <?php 
      $a = new GlobalArea('Site Name');
      $a->display();
      ?>
      <hr />
    </div>
  </div>

  <!-- End Nav -->


  <!-- Main Page Content and Sidebar -->

  <div class="row">

    <!-- Main Blog Content -->
    <div class="large-9 columns" role="content">
      <?php 
      $a = new Area('Main');
      $a->display($c);
      ?>
    </div>

    <!-- End Main Content -->


    <!-- Sidebar -->

    <aside class="large-3 columns">
      <?php 
      $a = new Area('Sidebar');
      $a->display($c);
      ?>
    </aside>

    <!-- End Sidebar -->
  </div>

  <!-- End Main Content and Sidebar -->


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
