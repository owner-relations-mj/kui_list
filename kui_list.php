<?php
if (!defined('KUI_LIST')) {
	define('KUI_LIST', 'YOUR_SEARCHABLE_LIST_BOX');
	echo "<link rel='stylesheet' href='./kui_list.css'>";
	echo "<script src='./kui_list.js'></script>";
	
	class kuiList {
		private $ID;
		private $Value;
		private $List = array();
		private $CSS;
		
		function __construct($p_ID, $p_Value, $p_CSS = null) {
			$this->ID    = $p_ID;
			$this->Value = $p_Value;
			$this->CSS = "";
			if ($p_CSS != null) {
				$this->CSS = " ".$p_CSS;
			}
		}
		function setList($p_value) {
			$this->List = $p_value;
			sort($this->List);
		}
		function setCSS($p_css) {
			$this->CSS = " ".$p_css;
		}
		function render() {
			$l_class = "";
			if ($this->CSS != "") {
				$l_class = $this->CSS . " " . $this->ID;
			}
			echo "<div class=\"kui_list".$this->CSS."\">
	<input onclick=\"kui_list_show('".$this->ID."')\" name=\"".$this->ID."\" id=\"".$this->ID."\" class=\"".$l_class."\" value=\"".$this->Value."\" onkeyup=\"kui_list_filter(event,'".$this->ID."')\" onfocusout=\"document.getElementById('".$this->ID."kui_list').style.display = 'none'\">
	<div id=\"".$this->ID."kui_list\" class=\"kui_list-content\">";
			foreach($this->List as $value) {
				echo "    <a href=\"javascript:kui_list_onClick('$this->ID','$value');\">$value</a>\n";
			}
			echo "  </div>
</div>";
		}
	}
}
?>
