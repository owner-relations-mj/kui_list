<?php
//include kui_list
require("kui_list.php");

//add your custom CSS to override kui_list default CSS
?>
<style>
.list1css {
	width: 120px;
	font-size: 14px;
	font-family: "Segoe UI", Arial,sans-serif;
}
.list2css {
	width: 200px;
	font-size: 14px;
	font-family: "Segoe UI", Arial,sans-serif;
}
</style>
<?php

//use kuiList
$list1 = new kuiList("World", "Country");
	$list1->setList(array("Philippines", "Canada", "China", "India", "United States", "France", "Germany", "Russia", "Spain", "United Kingdom"));
	$list1->setCSS("list1css");
echo "Country: "; $list1->render();

echo "<br/><br/>";

$list2 = new kuiList("Color", "Color", "list2css");
	$list2->setList(array("Red", "White", "Black", "Blue", "Gray", "Green", "Orange", "Purple", "Yellow"));
echo "Color: "; $list2->render();
?>
