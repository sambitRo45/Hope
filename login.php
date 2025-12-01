<?php
session_start(); // MUST be first
require_once "dbcon.php";

$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];

    $qry = "SELECT * FROM users WHERE email = ? AND password = ? AND type = ?";
    $stmt = $conn->prepare($qry);
    $stmt->bind_param("sss", $email, $password, $usertype);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();

        // Set session variables
        $_SESSION['id'] = $data['id'];
        $_SESSION['name'] = $data['name'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['type'] = $data['type'];

        header("Location: home.php");
        exit; // Important! Stop execution
    } else {
        $msg = "Invalid Email or Password";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="./Bootstrap/bootstrap.min.css" />

  <!-- Custom Theme -->
  <style>
    body {
      background-color: #F0F7EE;
    }

    .login-card {
      max-width: 500px;
      border-radius: 20px;
      padding: 40px;
      background: white;
      border: 2px solid #87BBA2;
    }

    .btn-theme {
      background-color: #87BBA2;
      border: none;
    }

    .btn-theme:hover {
      background-color: #5D737E;
    }

    .form-label {
      font-weight: 600;
      color: #5D737E;
    }
  </style>
</head>

<body>

  <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="login-card shadow">

      <h2 class="text-center mb-4" style="color:#5D737E;">Welcome 💚</h2>
      <p style="color: red; text-align: center; "><?php echo $msg ?></p>

      <form action="login.php" method="POST">
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input
            type="email" class="form-control form-control-lg" id="email" name="email"
            placeholder="Enter your email" required />
        </div>

        <div class="mb-3">
          <label for="pwd" class="form-label">Password</label>
          <input
            type="password" class="form-control form-control-lg"
            id="password" name="password" placeholder="Enter password" required />
        </div>

        <div class="mb-3">
          <label class="form-label fw-semibold">User Type</label>
          <select class="form-select" id="usertype" name="usertype">
            <option value="" disabled selected>Select user type</option>
            <option value="ashram">Ashram</option>
            <option value="volunteer">Volunteer</option>
            <option value="admin">Admin</option>
          </select>
          <small class="text-danger" id="userTypeError"></small>
        </div>

        <button type="submit" class="btn btn-theme w-100 btn-lg mt-2">Login</button>
      </form>

      <div class="text-center mt-4">
        <p class="mb-1" style="color:#5D737E;">New user?</p>
        <a href="register.php" class="btn btn-outline-secondary w-100 btn-lg">Register</a>
      </div>

    </div>
  </div>

</body>

</html>

