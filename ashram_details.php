<?php
    include_once "navbar.php";
    include_once "check.php";
?>
<div class="container my-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card shadow-lg p-4 border-0" style="border-radius: 15px;">
                <h3 class="text-center mb-4 text-success ">Add Ashram Details</h3>
                
                <form action="ashram_submit.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()"  novalidate>

                    <label class="form-label ">Name</label>
                    <input type="text" name="name" id="name" class="form-control mb-1">
                    <div id="nameError" class="text-danger mb-2"></div>

                    <label class="form-label ">Location</label>
                    <input type="text" name="location" id="location" class="form-control mb-1">
                    <div id="locationError" class="text-danger mb-2"></div>

                    <label class="form-label ">Pin Code</label>
                    <input type="number" name="pincode" id="pincode" class="form-control mb-1">
                    <div id="pincodeError" class="text-danger mb-2"></div>

                    <label class="form-label ">Add Image</label>
                    <input type="file" name="img" id="img" class="form-control mb-1">
                    <div id="imgError" class="text-danger mb-2"></div>

                    <label class="form-label ">Message</label>
                    <textarea name="message" id="message" rows="5" class="form-control mb-1"></textarea>
                    <div id="complainError" class="text-danger mb-2"></div>

                    <label class="form-label">Email</label>
                    <input type="email" value="<?php echo $_SESSION['email'] ?>" class="form-control mb-1" id="email" name="email" readonly>
                    <div id="emailError" class="text-danger mb-2"></div>

                    
                    <div class="text-center mt-3">
                        <input type="submit" value="Submit Request" class="btn btn-success px-4 py-2 fw-bod" style="border-radius: 10px;">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<script src="./jsfiles/ashram_validator.js"></script>

<?php
    include_once "footer.php";
?>
