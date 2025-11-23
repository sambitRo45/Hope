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

      <h2 class="text-center mb-4" style="color:#5D737E;">Welcome Back 💚</h2>

      <form>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input
            type="email" class="form-control form-control-lg" id="email"
            placeholder="Enter your email" required />
        </div>

        <div class="mb-3">
          <label for="pwd" class="form-label">Password</label>
          <input
            type="password" class="form-control form-control-lg"
            id="pwd" placeholder="Enter password" required />
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
