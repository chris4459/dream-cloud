function validate_form() {
	var age = document.getElementById("age").value;
	var gender = document.getElementById("gender").value;
	var email = document.getElementById("email").value;
	var dream = document.getElementById("dream").value;
	var inputs = [ age, gender, email, dream ];
	var missing_a_field = false;
	inputs.forEach(function(input) {
		if (input === "") {
			missing_a_field = true;
		}
	});
	if (missing_a_field) {
		alert("Please fill out all fields!");
		return false;
	}
	if (email.indexOf("@") == -1 || email.indexOf(".") == -1) {
		alert("Email format is wrong");
		return false;
	}
	if(isNaN(age)){
		alert("Please enter a number for age");
		return false;
	}
	return true;

}