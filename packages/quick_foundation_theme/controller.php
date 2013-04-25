<?php     

defined('C5_EXECUTE') or die(_("Access Denied."));

class QuickFoundationThemePackage extends Package {
	
	protected $pkgHandle = 'quick_foundation_theme';
	protected $appVersionRequired = '5.6';
	protected $pkgVersion = '0.1';
	
	public function getPackageDescription() {
		return t("a concrete5 theme for quick start with foundation framework");
	}
	
	public function getPackageName() {
		return t("Quick Foundation Theme");
	}
	
	public function install() {
		$pkg = parent::install();
		PageTheme::add('quick_foundation', $pkg);
	}
}