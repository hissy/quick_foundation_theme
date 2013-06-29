<?php	 
defined('C5_EXECUTE') or die("Access Denied.");
class Layout extends Concrete5_Model_Layout {
	
	function display( $c=NULL, $a=NULL ){ 
	
		if(!$c) global $c;
		
		if(!$a) global $a;
		
		if(!in_array($this->type,$this->layoutTypes)) $this->layoutType='table'; 
		
		echo '<div id="ccm-layout-wrapper-'.intval($this->cvalID).'" class="ccm-layout-wrapper">';
		
		if ($c->isEditMode()) { 
			$args = array('layout'=>$this);
			Loader::element('block_area_layout_controls', $args); 
		}
		
		//echo intval($this->cvalID).' '.$this->layoutID.'<br>';
		
		//$this->displayTableGrid($this->rows,$this->columns,$c);
		$this->displayFoundationGrid($this->rows,$this->columns,$c); 
		
		echo '</div>';
	}
	
	protected function displayFoundationGrid($rows=3,$columns=3,$c=NULL){
		if(!$c) global $c;
		if($c->isEditMode()) $editMode='ccm-edit-mode';
		if(!intval($rows)) $rows=1;
		if(!intval($columns)) $columns=3;
		$layoutNameClass = 'ccm-layout-name-'.TextHelper::camelcase($this->getAreaHandle()).'-'.TextHelper::camelcase($this->getLayoutNameTxt()).'-'.$this->getAreaNameNumber();
		$layoutIDVal = strtolower('ccm-layout-'.TextHelper::camelcase($this->getAreaHandle()).'-'.$this->layoutID . '-'. $this->getAreaNameNumber());
		
		$colWidth = floor(12 / $columns);
		for( $i=0; $i<$rows; $i++ ){
			echo '<section class="row '.$layoutNameClass.' '.$editMode.'">';
			for( $j=0; $j<$columns; $j++ ){
				$columnn_id = 'ccm-layout-'.intval($this->layoutID).'-col-'.($j+1);
				echo '<div class="'.$columnn_id.' large-'.$colWidth.' columns">';
				$a = new Area( $this->getCellAreaHandle($this->getCellNumber()) );
				$a->display($c);
				echo '</div>';
			}
			echo '</section>';
		}
	}

}