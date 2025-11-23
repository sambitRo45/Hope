<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register - HOPE</title>

  <link rel="stylesheet" href="./Bootstrap/bootstrap.min.css" />

  <style>
    body {
      background-color: #F0F7EE;
      font-family: 'Segoe UI';
    }

    .register-card {
      background: #ffffff;
      border-radius: 18px;
      padding: 35px;
      border: 1px solid #e2e2e2;
    }

    .btn-hope {
      background-color: #87BBA2;
      border: none;
      color: #fff;
      font-weight: 600;
      transition: 0.3s;
    }

    .btn-hope:hover {
      background-color: #5D737E;
    }

    .link-btn {
      border: 1px solid #87BBA2;
      color: #87BBA2;
      font-weight: 600;
    }

    .link-btn:hover {
      background: #87BBA2;
      color: white;
    }
  </style>

</head>

<body>

  <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="register-card shadow">

      <h3 class="text-center mb-4" style="color:#5D737E;">Create Your HOPE Account</h3>

      <form onsubmit="validateForm(event)">

        <div class="mb-3">
          <label class="form-label fw-semibold">Full Name</label>
          <input type="text" class="form-control" id="fullname" placeholder="Enter full name" />
          <small class="text-danger" id="nameError"></small>
        </div>

        <div class="mb-3">
          <label class="form-label fw-semibold">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" />
          <small class="text-danger" id="emailError"></small>
        </div>

        <div class="mb-3">
          <label class="form-label fw-semibold">Password</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" />
          <small class="text-danger" id="passwordError"></small>
        </div>

        <div class="mb-3">
          <label class="form-label fw-semibold">Confirm Password</label>
          <input type="password" class="form-control" id="cpwd" placeholder="Confirm password" />
          <small class="text-danger" id="cpasswordError"></small>
        </div>

        <div class="mb-3">
          <label class="form-label fw-semibold">User Type</label>
          <select class="form-select" id="usertype">
            <option value="" disabled selected>Select user type</option>
            <option value="ashram">Ashram</option>
            <option value="volunteer">Volunteer</option>
          </select>
          <small class="text-danger" id="userTypeError"></small>
        </div>

        <button type="submit" class="btn btn-hope w-100">Register</button>

      </form>

      <div class="text-center mt-3">
        <p class="mb-1">Already have an account?</p>
        <a href="login.php" class="btn link-btn w-100">Login</a>
      </div>

    </div>
  </div>

  <script src="./jsfiles/register-validator.js"></script>
</body>

</html>
