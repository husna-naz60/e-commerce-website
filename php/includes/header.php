<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Shop Navbar</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    .navbar-brand i {
      color: #fff;
      margin-right: 8px;
    }
    .navbar {
      background: linear-gradient(90deg, #0dcaf0, #20c997);
      /* background: rgba(13,202,240,1); */
    }
    .nav-link {
      color: white !important;
      font-weight: 500;
    }
    .nav-link:hover {
      color: #ffeb3b !important;
    }
    .btn-login, .btn-register {
      border-radius: 20px;
      padding: 5px 15px;
    }
    .btn-login {
      background-color: #ffc107;
      color: #000;
    }
    .btn-login:hover {
      background-color: #e0a800;
    }
    .btn-register {
      background-color: #dc3545;
      color: white;
    }
    .btn-register:hover {
      background-color: #c82333;
    }

      .navbar .dropdown-menu a:hover {
    background-color: #e7f3f9;
  }
  </style>
</head>
<body>

 <!-- Bootstrap 5 Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-info shadow-sm">
  <div class="container">
    <!-- Brand -->
    <a class="navbar-brand fw-bold text-white" href="index.html">
      <i class="fas fa-shopping-bag me-2"></i>E-Shop
    </a>

    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto align-items-lg-center">
        <li class="nav-item">
          <a class="nav-link text-white fw-semibold" href="home.php">
            <i class="fas fa-home me-1"></i>Home
          </a>
        </li>

        <!-- Account Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white fw-semibold" href="#" id="accountDropdown" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user-circle me-1"></i>Account
          </a>
          <ul class="dropdown-menu dropdown-menu-end border-0 shadow-sm">
            <li>
              <a class="dropdown-item" href="index.php">
                <i class="fas fa-sign-in-alt me-2 text-info"></i>Login
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="register.php">
                <i class="fas fa-user-plus me-2 text-info"></i>Register
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>