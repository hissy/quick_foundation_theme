<?php	defined('C5_EXECUTE') or die("Access Denied."); ?>

	<nav class="top-bar">
		<!-- Side Name -->
		<ul class="title-area">
			<li class="name">
				<?php 
				$a = new GlobalArea('Site Name');
				$a->display();
				?>
			</li>
			<li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
		</ul>
		<!-- Header Nav -->
		<section class="top-bar-section">
			<?php
			// if you use antonav block, Foundation Dropdown Right template is better.
			$a = new GlobalArea('Header Nav');
			$a->display();
			?>
		</section>
	</nav>

	<!-- Header -->
	<div class="row">
		<div class="large-12 columns">
			<?php 
			$a = new Area('Header Image');
			$a->display($c);
			?>
			<hr />
		</div>
	</div>
	
	<div class="row">
		<!-- Main -->
		<div class="large-9 columns">
			<?php 
			$a = new Area('Main');
			$a->display($c);
			?>
		</div>
		<!-- Sidebar -->
		<div class="large-3 columns">
			<?php 
			$a = new Area('Sidebar');
			$a->display($c);
			?>
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