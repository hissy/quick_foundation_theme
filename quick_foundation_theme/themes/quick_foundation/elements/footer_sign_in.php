<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<p class="footer-sign-in">
<?php 
$u = new User();
if ($u->isRegistered()) { ?>
	<?php  
	if (Config::get("ENABLE_USER_PROFILES")) {
		$userName = '<a href="' . $this->url('/profile') . '">' . $u->getUserName() . '</a>';
	} else {
		$userName = $u->getUserName();
	}
	?>
	<span class="sign-in"><?php echo t('Currently logged in as <b>%s</b>.', $userName)?> <a href="<?php echo $this->url('/login', 'logout')?>"><?php echo t('Sign Out')?></a></span>
<?php  } else { ?>
	<span class="sign-in"><a href="<?php echo $this->url('/login')?>"><?php echo t('Sign In to Edit this Site')?></a></span>
<?php  } ?>
</p>