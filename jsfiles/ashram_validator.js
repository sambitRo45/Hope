function validateForm() {

    // Get field values
    let name = document.getElementById("name").value.trim();
    let location = document.getElementById("location").value.trim();
    let pincode = document.getElementById("pincode").value.trim();
    let img = document.getElementById("img").value;
    let complain = document.getElementById("complain").value.trim();

    // Clear previous error messages
    document.getElementById("nameError").innerText = "";
    document.getElementById("locationError").innerText = "";
    document.getElementById("pincodeError").innerText = "";
    document.getElementById("imgError").innerText = "";
    document.getElementById("complainError").innerText = "";

    // Regex patterns
    let nameRegex = /^[A-Za-z ]{3,50}$/;
    let locationRegex = /^[A-Za-z0-9 ,.-]{3,100}$/;
    let pincodeRegex = /^[0-9]{6}$/;
    let imageRegex = /\.(jpg|jpeg|png|gif)$/i;

    let isValid = true;

    // Name validation
    if (!name) {
        document.getElementById("nameError").innerText = "Name is required";
        isValid = false;
    } else if (!nameRegex.test(name)) {
        document.getElementById("nameError").innerText = "Name must be letters only (min 3 chars)";
        isValid = false;
    }

    // Location validation
    if (!location) {
        document.getElementById("locationError").innerText = "Location is required";
        isValid = false;
    } else if (!locationRegex.test(location)) {
        document.getElementById("locationError").innerText = "Enter a valid location";
        isValid = false;
    }

    // Pincode validation
    if (!pincode) {
        document.getElementById("pincodeError").innerText = "Pincode is required";
        isValid = false;
    } else if (!pincodeRegex.test(pincode)) {
        document.getElementById("pincodeError").innerText = "Pincode must be 6 digits";
        isValid = false;
    }

    // Image validation
    if (!img) {
        document.getElementById("imgError").innerText = "Please upload an image";
        isValid = false;
    } else if (!imageRegex.test(img)) {
        document.getElementById("imgError").innerText = "Allowed formats: jpg, jpeg, png, gif";
        isValid = false;
    }

    // Complaint validation
    if (!complain) {
        document.getElementById("complainError").innerText = "Complaint is required";
        isValid = false;
    } else if (complain.length < 10) {
        document.getElementById("complainError").innerText = "Complaint must be at least 10 characters";
        isValid = false;
    }

    return isValid; 
}
