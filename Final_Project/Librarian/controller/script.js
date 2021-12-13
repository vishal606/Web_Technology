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

function validate_name() {
       let name = document.getElementById('name').value;
    

    if (name.length === 0) {
        document.getElementById('err_name').innerHTML = "Enter NAME...";
        
    } else if (name.length < 3) {
       document.getElementById('err_name').innerHTML = "At least 3 characters..."; 
       
    } else if (!name.match(/^[a-zA-Z]/g)) {
       document.getElementById('err_name').innerHTML = "Must start with a letter..."; 
        
    } else {
      document.getElementById('err_name').innerHTML = "";  
        
        return true;
    }

    return false;
}

function validate_email() {
    let email = document.getElementById('email').value;
    

    if (email.length === 0) {
    document.getElementById('err_email').innerHTML = "Email is required...";
       
    } else if (!email.match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)+(?:\.[a-zA-Z0-9-]+)*$/g)) {
        err_email.innerHTML = 'Email is not valid e.g example@example.com';
    } else {
        err_email.innerHTML = 'Valid Email';
        return true;
    }

    return false;
}

function validate_gender() {
    let gender = document.querySelectorAll("input[name*=gender]");
    let err_gender = get_element('err_gender');

    gender.forEach(function (elem) {
        if (elem.checked) {
            gender = elem.value;
            return;
        }
    });


    if (typeof gender !== 'string' && gender.length) {
        err_gender.innerHTML = 'Gender is required';
    } else if (!gender.match(/male|female|other/g)) {
        err_gender.innerHTML = 'Gender is not valid';
    } else {
        err_gender.innerHTML = 'Valid Gender';
        return true;
    }

    return false;
}





function validate_dob() {
    let dd = get_element("dd").value;
    let mm = get_element("mm").value;
    let yyyy = get_element("yyyy").value;
    let err_dob = get_element('err_dob');


    if (!dd.length) {
        err_dob.innerHTML = 'Day is required';
    } else if (!(dd >= 1 && dd <= 31)) {
        err_dob.innerHTML = 'Day is not valid';
    } else if (!mm.length) {
        err_dob.innerHTML = 'Month is required';
    } else if (!(mm >= 1 && mm <= 12)) {
        err_dob.innerHTML = 'Month is not valid';
    } else if (!yyyy.length) {
        err_dob.innerHTML = 'Years is required';
    } else if (!(yyyy >= 1900 && yyyy <= 2016)) {
        err_dob.innerHTML = 'Years is not valid';
    } else {
        err_dob.innerHTML = 'Valid Date';
        return true;
    }

    return false;
}

function validate_bloodgrp() {
    let value = get_element('bloodgrp').value;
    let err_bloodgrp = get_element('err_bloodgrp');

    if (value.length === 0) {
        err_bloodgrp.innerHTML = 'Blood Group is required';
    } else if (!value.match(/A(\+|\-)|B(\+|\-)|AB(\+|\-)|O(\+|\-)/g)) {
        err_bloodgrp.innerHTML = 'Blood Group is not valid';
    } else {
        err_bloodgrp.innerHTML = 'Valid BLood Group';
        return true;
    }

    return false;
}

function validate_pp() {
    let userid = get_element('userid').value;
    let picture = get_element('picture').value;
    let err_pp = get_element('err_pp');


    if (userid.length === 0) {
        err_pp.innerHTML = 'User ID is required';
    } else if (isNaN(+userid) || userid <= 0) {
        err_pp.innerHTML = 'User ID must be positive integer';
    } else if (picture.length === 0) {
        err_pp.innerHTML = 'Picture is required';
    } else {
        err_pp.innerHTML = 'Valid';
        return true;
    }

    return false;
}

