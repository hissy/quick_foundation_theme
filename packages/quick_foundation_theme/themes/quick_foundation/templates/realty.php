<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<!-- Navigation -->

  <nav class="top-bar">
    <ul class="title-area">
      <!-- Title Area -->
      <li class="name">
        <?php 
        $a = new GlobalArea('Site Name');
        $a->display();
        ?>
      </li>
      <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
    </ul>
 
    <section class="top-bar-section">
      <!-- Right Nav Section -->
      <?php
      $a = new GlobalArea('Header Nav');
      $a->display();
      ?>
    </section>
  </nav>
 
  <!-- End Top Bar -->

  <!-- Header -->
  <div class="row">
    <div class="large-12 columns">
      <?php 
      $a = new Area('Header Image');
      $a->display($c);
      ?><br><br>
    </div>
  </div>

  <!-- End Header -->


  <div class="row">

    <div class="large-3 panel columns">
      <?php 
      $a = new Area('Sidebar');
      $a->display($c);
      ?>
    </div>

    <div class="large-9 columns">
      <div class="panel">
        <?php 
        $a = new Area('Main');
        $a->display($c);
        ?>
      </div>

      <div class="row">
        <div class="large-6 columns">
          <div class="panel">
            <?php 
            $a = new Area('Main Bottom');
            $a->display($c);
            ?>
          </div>
        </div>

        <div class="large-6 columns">
          <div class="panel">
            <?php 
            $a = new Area('Sidebar Bottom');
            $a->display($c);
            ?>
        </div>
      </div>
    </div>

  </div>

  <!-- Footer -->

  <footer class="row">
  <div class="large-12 columns"><hr />
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
