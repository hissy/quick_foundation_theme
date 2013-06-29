<?php	defined('C5_EXECUTE') or die("Access Denied."); ?>
<ul class="large-block-grid-3">
<?php
	$c = Page::getCurrentPage();
	$cp = new Permissions($c);
	if ($cp->canViewPageVersions()) {
		$stack = Stack::getByID($stID);	
	} else {
		$stack = Stack::getByID($stID, 'ACTIVE');
	}
	if (is_object($stack)) { 
		$ax = Area::get($stack, STACKS_AREA_NAME);
		$axp = new Permissions($ax);
		if ($axp->canRead()) {
			$ax->setBlockWrapperStart('<li>');
			$ax->setBlockWrapperEnd('</li>');
			$ax->display($stack);
		}
	}
?>
</ul>