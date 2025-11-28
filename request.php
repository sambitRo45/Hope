<?php include_once 'navbar.php' ?>
<style>
body {
    background-image: url('./Assets/bg-pic.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    margin: 0; 
}

.navbar {
    background-color:#ffffff !important; 
    height: 60px; 
}
.navbar .navbar-brand, 
.navbar .nav-link {
    color: #34495e !important; 
}
.navbar .nav-link:hover {
    color:  #27ae60!important; 
}
</style>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow-lg p-4" style="max-width: 600px; width: 100%; border-radius: 15px;">
        <h2 class="text-center mb-4 fs-1" style="color:#5D737E; font-weight:600;">Write Your Request</h2>

        <form action="request.php" method="post">
            <div class="mb-3">
                <textarea name="message" id="message" rows="6" class="form-control"
                placeholder="Type your message or request here..." required
                style="resize: none; border-radius:10px;"></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success px-4 py-2 fw-bold" style="border-radius: 10px;">
                    Submit Request
                </button>
            </div>
        </form>
    </div>
</div>

<?php include_once 'footer.php' ?>
