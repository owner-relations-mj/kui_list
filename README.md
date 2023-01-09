# kui_list
Your searchable list box for PHP.  Based on **w3schools** [Filter Dropdown tutorial](https://www.w3schools.com/howto/howto_js_filter_dropdown.asp).

1. Include <code>kui_list.php</code>
```php
<?php
require("kui_list.php");
?>
```
2. Add your custom CSS to override kui_list default CSS
```html
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
```
3. Use <code>kuiList</code> class from use <code>kui_list.php</code>
```php
<?php
$list1 = new kuiList("World", "Country");
	$list1->setList(array("Philippines", "Canada", "China", "India", "United States", "France", "Spain", "United Kingdom"));
	$list1->setCSS("list1css");
echo "Country: "; $list1->render();

echo "<br/><br/>";

$list2 = new kuiList("Color", "Color", "list2css");
	$list2->setList(array("Red", "White", "Black", "Blue", "Gray", "Green", "Orange", "Purple", "Yellow"));
echo "Color: "; $list2->render();
?>
```
