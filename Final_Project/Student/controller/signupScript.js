function validateUid(){
            let uid = document.getElementById('uid').value;

            if (uid.length === 0) {
                document.getElementById('err_uid').innerHTML = "Enter UID...";
            } else if (uid.length < 4) {
                document.getElementById('err_uid').innerHTML = "At least 4 digits...";
            } /*else if (!uid.match(/^[a-zA-Z]/g)) {
                document.getElementById('err_uid').innerHTML = "Name must start with a letter...";
            }*/ else if (!uid.match(/^0[1-9]|[1-9]/)) {
                document.getElementById('err_uid').innerHTML = '1000-9999...';
            } else {
                document.getElementById('err_uid').innerHTML = '';
                return true;
            }
            return false;
        }

        function validatePass(){
            let password = document.getElementById('password').value;

            if (password.length === 0) {
                document.getElementById('err_pass').innerHTML = "Enter PASSWORD...";
            } else if (password.length < 2) {
                document.getElementById('err_pass').innerHTML = "At least 2 entry...";
            } else {
                document.getElementById('err_pass').innerHTML = '';
                return true;
            }
            return false;
        }

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

        function validateGender() {
            let gender = document.getElementById('gender').value;

            if (gender.length === 0) {
                document.getElementById('err_gender').innerHTML = "Select Gender...";
            } else {
                document.getElementById('err_gender').innerHTML = "";
                return true;
            }
            return false;
        }

        function validateBloodgrp() {
            let bloodgrp = document.getElementById('bloodgrp').value;

            if (bloodgrp.length === 0) {
                document.getElementById('err_bloodgrp').innerHTML = "Select Blood Group...";
            } else {
                document.getElementById('err_bloodgrp').innerHTML = "";
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

        function validateType() {
            let type = document.getElementById('type').value;

            if (type.length === 0) {
                document.getElementById('err_type').innerHTML = "Select User Type...";
            } else {
                document.getElementById('err_type').innerHTML = "";
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
        {header('location: ../views/signup.php');}

        function myValidation(){
            /*let password = document.getElementById('password').value;*/
           if(validateUid()!=true || validatePass()!=true || validateName()!=true || validateDOB()!=true || validateGender()!=true || validateAddress()!=true || validateEmail()!=true || validatePicture()!=true){
              /*|| validateBloodgrp()!=true || validateClass()!=true*/
              alert("Oops! Validation failed!");
              returnToPreviousPage();
              return false;
           } else
               /*alert("Validations successful!");*/
               return true;
        }