function kui_list_show(p_listbox) {
	document.getElementById(p_listbox+"kui_list").style.display = "block";
	document.getElementById(p_listbox).focus();
	document.getElementById(p_listbox).select();
}
function kui_list_onClick(p_listbox, p_input) {
	document.getElementById(p_listbox).value = p_input;
	document.getElementById(p_listbox+"kui_list").style.display = "none";
}
function kui_list_filter(p_listbox) {
	var input, filter, a, i;
	input = document.getElementById(p_listbox);
	filter = input.value.toUpperCase();
	a = document.getElementById(p_listbox+"kui_list").getElementsByTagName("a");
	var hidden = 0;
	for (i = 0; i < a.length; i++) {
		txtValue = a[i].textContent || a[i].innerText;
		if (txtValue.toUpperCase().indexOf(filter) > -1) {
			a[i].style.display = "block";
		} else {
			a[i].style.display = "none";
			++hidden;
		}
	}
	document.getElementById(p_listbox+"kui_list").style.display = "block";
	if (hidden == a.length) {
		document.getElementById(p_listbox+"kui_list").style.display = "none";
	}
}
