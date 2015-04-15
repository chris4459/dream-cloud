// Ashwin Saxena and Chris Lee wrote this

function validate_form(){

	if( document.dreamform.age.value == "" ){
		alert( "Please provide your age!" );
		document.dreamform.age.focus() ;
		return false;
	}

	if( isNaN(document.dreamform.age.value)  ){
		alert( "Age has to be a number!" );
		document.dreamform.age.focus() ;
		return false;
	}

	if( document.dreamform.email.value == "" ){
		alert( "Please provide your Email!" );
		document.dreamform.email.focus() ;
		return false;
	}

	var email = document.getElementById("email").value;

	if (email.indexOf("@") == -1 || email.indexOf(".") == -1) {
		alert("Email format is wrong");
		return false;
	}

	var genders = document.getElementsByName("gender");
	if (!genders[0].checked && !genders[1].checked) {
		alert( "Please provide your gender!" );
		return false;
	};

	if( document.dreamform.dream.value == "" ){
		alert( "Please share your dream!" );
		document.dreamform.dream.focus() ;
		return false;
	}


}