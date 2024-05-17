
    document.getElementById("registrationForm").addEventListener("submit", function(event) {
      event.preventDefault();
      if (validateForm()) {
        this.submit();
      }
    });
 
    function validateForm() {
      var isValid = true;
 
      var AName = document.getElementById('AName').value;
      var ANameError = document.getElementById('ANameError');
      if (AName === "") {
        ANameError.innerHTML = "Admin Name is required";
        isValid = false;
      } else {
        ANameError.innerHTML = "";
      }
 
      var username = document.getElementById('username').value;
var usernameError = document.getElementById('usernameError');
var isValid = true; // Initialize isValid variable
 
if (username === "") {
    usernameError.innerHTML = "Username is required";
    isValid = false;
} else if (!/^[a-zA-Z]+$/.test(username)) {
    usernameError.innerHTML = "Name should contain only alphabets";
    isValid = false;
} else {
    usernameError.innerHTML = ""; // Clear error message if valid
}
     
      var mblnum = document.getElementById('mblnum').value;
      var mblnumError = document.getElementById('mblnumError');
      if (mblnum === "") {
        mblnumError.innerHTML = "Mobile Number is required";
        isValid = false;
      } else if (!/^\d{10}$/.test(mblnum)) {
        mblnumError.innerHTML = "Invalid Mobile Number";
        isValid = false;
      } else {
        mblnumError.innerHTML = "";
      }
 

      var male = document.getElementById('male');
      var female = document.getElementById('female');
      var genderError = document.getElementById('genderError');
      if (!male.checked && !female.checked) {
        genderError.innerHTML = "Gender is required";
        isValid = false;
      } else {
        genderError.innerHTML = "";
      }
 

      var email = document.getElementById('email').value;
      var emailError = document.getElementById('emailError');
      if (email === "") {
        emailError.innerHTML = "Email is required";
        isValid = false;
      } else if (!/^\S+@\S+\.\S+$/.test(email)) {
        emailError.innerHTML = "Invalid Email Address";
        isValid = false;
      } else {
        emailError.innerHTML = "";
      }
 

      var pass = document.getElementById('pass').value;
      var passError = document.getElementById('passError');
      if (pass === "") {
        passError.innerHTML = "Password is required";
        isValid = false;
      } else if (!/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/.test(pass)) {
        passError.innerHTML = "Password must be at least 8 characters long and contain at least one letter, one number, and one special character";
        isValid = false;
      } else {
        passError.innerHTML = "";
      }
 
      return isValid;
    }
