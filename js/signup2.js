const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

form.addEventListener('submit', e => {
    checkInputs(e);
});

function checkTrue(elem) {
    return elem === true;
  } 

function checkInputs(e) {
	// trim to remove the whitespaces
	const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const phoneValue = phone.value.trim();
	const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();

    const boolArray = [];
    

//// radio 
    let radios = document.getElementsByName("yesno");
    let formValid = false;
    let i = 0;
    const formControl = document.getElementById("radio-form");
    const small = formControl.querySelector('small');

    if ((form.gender[0].checked == false ) && (form.gender[1].checked == false) && (form.gender[2].checked ==false)){
        formControl.className = 'form-control error';
        small.innerText="This field cannot be blank";
        console.log(formValid)
        setErrorForRadio();
        boolArray.push(false);
    }

    else if ((form.gender[0].checked == true ) && (form.gender[1].checked == false) && (form.gender[2].checked ==false)){
        formControl.className = 'form-control success';
        setSuccessForRadio();
        boolArray.push(true);
    }

    else if ((form.gender[0].checked == false ) && (form.gender[1].checked == true) && (form.gender[2].checked ==false)){
        formControl.className = 'form-control success';
        setSuccessForRadio();
        boolArray.push(true);
    }

    else {
        formControl.className = 'form-control success';
        setSuccessForRadio();
        boolArray.push(true);
    }

	if(usernameValue === '') {
        setErrorFor(username, 'Username cannot be blank');
        boolArray.push(false);
	} else {
        setSuccessFor(username);
        boolArray.push(true);
	}
	
	if(emailValue === '') {
        setErrorFor(email, 'Email cannot be blank');
        boolArray.push(false);
	} else if (!isEmail(emailValue)) {
        setErrorFor(email, 'Not a valid email');
        boolArray.push(false);
	} else {
        setSuccessFor(email);
        boolArray.push(true);
	}
    
    if (phoneValue === ''){
        setErrorFor(phone, 'Phone cannot be blank');
        boolArray.push(false);
    }
    else if (!isPhone(phoneValue)){
        setErrorFor(phone, 'Not a valid phone number');
        boolArray.push(false);
    }
    else if(phoneValue.length<10 || phoneValue.length>10){
        setErrorFor(phone, 'Not a valid phone number');
        boolArray.push(false);
    }
    else{
        setSuccessFor(phone);
        boolArray.push(true);
    }


	if(passwordValue === '') {
        setErrorFor(password, 'Password cannot be blank');
        boolArray.push(false);
	} else {
        setSuccessFor(password);
        boolArray.push(true);
	}
	
	if(password2Value === '') {
        setErrorFor(password2, 'Password cannot be blank');
        boolArray.push(false);
	} else if(passwordValue !== password2Value) {
        setErrorFor(password2, 'Passwords does not match');
        boolArray.push(false);
	} else{
        setSuccessFor(password2);
        boolArray.push(true);
    }

    // checking for form validation;
    for (i=0;i<boolArray.length;i++){
        // if not all of the form fields are valid, then we prevent the default action from happening,
        // which is going to the the new_user_process.php page
        if (boolArray[i] == false){
            e.preventDefault();
            console.log('BOOL ARRAY FALSE');
            console.log(boolArray);
        }
    }
    // if all form fields are valid, we simply do nothing, return, and go to default action
    if (boolArray.every(checkTrue)){
        return;
    }
    
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}

function setErrorForRadio(){
    document.getElementById('radio-boxes').style.borderColor= '#e74c3c';
}

function setSuccessForRadio(){
    document.getElementById('radio-boxes').style.borderColor= '#2ecc71';
}


	
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

function isPhone(phone) {
	return  /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/.test(phone);
}














