function validateName() {
			let name = document.getElementById('name').value;

		    if (name.length === 0) {
		        document.getElementById('err_name').innerHTML = "Enter NAME...";
		    } else if (name.length < 3) {
		        document.getElementById('err_name').innerHTML = "At least 3 characters...";
		    } else if (!name.match(/^[a-zA-Z]/g)) {
		        document.getElementById('err_name').innerHTML = "Must start with a letter...";
		    } /*else if (!name.match(/^[a-zA-Z.-]+$/g)) {
		        document.getElementById('err_name').innerHTML = "Contain only letters, numbers, periods and dashes...";
		    }*/ else {
		        document.getElementById('err_name').innerHTML = "";
		        return true;
		    }
		    return false;
		}

		function validateDOB() {
			let dob = document.getElementById('dob').value;

		    if (dob.length === 0) {
		        document.getElementById('err_dob').innerHTML = "Enter Date of Birth...";
		    } else if (dob.length < 10) {
		        document.getElementById('err_dob').innerHTML = "At least 10 characters...";
		    } else {
		        document.getElementById('err_dob').innerHTML = "";
		        return true;
		    }
		    return false;
		}

		function validateClass() {
			let classes = document.getElementById('class').value;

		    if (classes.length === 0) {
		        document.getElementById('err_class').innerHTML = "Enter Class...";
		    } else {
		        document.getElementById('err_class').innerHTML = "";
		        return true;
		    }
		    return false;
		}

		function validateAddress() {
			let address = document.getElementById('address').value;

		    if (address.length === 0) {
		        document.getElementById('err_address').innerHTML = "Enter Address...";
		    } else if (address.length < 5) {
		        document.getElementById('err_address').innerHTML = "At least 5 characters...";
		    } else if (!address.match(/^[a-zA-Z]/g)) {
		        document.getElementById('err_address').innerHTML = "Must start with a letter...";
		    } else {
		        document.getElementById('err_address').innerHTML = "";
		        return true;
		    }
		    return false;
		}

		function validateEmail() {
		    let email = document.getElementById('email').value;
		    
		    if (email.length === 0) {
		        document.getElementById('err_email').innerHTML = "Email is required...";
		    } else if (!email.match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)+(?:\.[a-zA-Z0-9-]+)*$/g)) {
		        document.getElementById('err_email').innerHTML = "Not valid e.g example@example.com...";
		    } else {
		        document.getElementById('err_email').innerHTML = "";
		        return true;
		    }
		    return false;
		}

		function validatePicture() {
			let picture = document.getElementById('picture').value;

		    if (picture.length === 0) {
		        document.getElementById('err_picture').innerHTML = "Choose a Picture...";
		    } else {
		        document.getElementById('err_picture').innerHTML = "";
		        return true;
		    }
		    return false;
		}

		function returnToPreviousPage()
		{header('location: ../views/profile-edit.php');}

		function myValidation(){
			
		   if(validateName()!=true || validateDOB()!=true || validateClass()!=true || validateAddress()!=true || validateEmail()!=true || validatePicture()!=true){
		      alert("Oops! Validation failed!");
		      returnToPreviousPage();
		      return false;
		   } else
			   /*alert("Validations successful!");*/
			   return true;
		}
