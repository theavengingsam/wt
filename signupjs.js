function validateForm() {
		var x = document.forms["myForm"]["Username"].value;
		var y = document.forms["myForm"]["Password"].value;
		if (x == "" && y == "") {
			alert("please enter Username and Password");
			return false;
		}
		if (x == "") {
			alert("please enter Username");
			return false;
		}
		if (y == "") {
			alert("please enter Password");
			return false;
		}
		return true;
	}