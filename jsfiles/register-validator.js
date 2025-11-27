function validateForm(e) {

    let error = false;

    // Get form elements
    let fullname = document.getElementById("fullname").value.trim();
    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("pwd").value.trim();
    let cpassword = document.getElementById("cpwd").value.trim();
    let userType = document.getElementById("usertype").value;

    // Error labels
    let nameError = document.getElementById("nameError");
    let emailError = document.getElementById("emailError");
    let passwordError = document.getElementById("passwordError");
    let cpasswordError = document.getElementById("cpasswordError");
    let userTypeError = document.getElementById("userTypeError");

    // ------------------------
    // Full Name Validation
    // ------------------------
    if (fullname === "") {
        nameError.innerHTML = "Full Name is required";
        error = true;
    } else {
        nameError.innerHTML = "";
    }

    // ------------------------
    // Email Validation
    // ------------------------
    let emailRegx = /^[a-z0-9_\.]{3,}@[a-z0-9\.]{3,15}\.[a-z]{2,5}$/;
    if (email === "") {
        emailError.innerHTML = "Email is required";
        error = true;
    } else if (!emailRegx.test(email)) {
        emailError.innerHTML = "Please enter a valid email";
        error = true;
    } else {
        emailError.innerHTML = "";
    }

    // ------------------------
    // Password Validation
    // ------------------------
    let passErrMsg = "";

    if (password === "") {
        passErrMsg += "Password is required <br>";
        error = true;
    }
    if (!/[a-z]/.test(password)) {
        passErrMsg += "Password should have 1 lowercase character <br>";
        error = true;
    }
    if (!/[A-Z]/.test(password)) {
        passErrMsg += "Password should have 1 uppercase character <br>";
        error = true;
    }
    if (!/[0-9]/.test(password)) {
        passErrMsg += "Password should have 1 number <br>";
        error = true;
    }
    if (!/[@#$%^&]/.test(password)) {
        passErrMsg += "Password should have 1 special character <br>";
        error = true;
    }
    if (password.length < 8 || password.length > 15) {
        passErrMsg += "Password must be 8–15 characters <br>";
        error = true;
    }

    passwordError.innerHTML = passErrMsg;

    // ------------------------
    // Confirm Password Validation
    // ------------------------
    if (cpassword === "") {
        cpasswordError.innerHTML = "Confirm Password is required";
        error = true;
    } else if (cpassword !== password) {
        cpasswordError.innerHTML = "Passwords do not match";
        error = true;
    } else {
        cpasswordError.innerHTML = "";
    }

    // ------------------------
    // User Type Dropdown
    // ------------------------
    if (userType === "") {
        userTypeError.innerHTML = "Please select user type";
        error = true;
    } else {
        userTypeError.innerHTML = "";
    }

    if (error) {
        e.preventDefault();
    }
}
