<?php include('includes/header.php'); ?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
  <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%; border-radius: 15px;">
    <div class="text-center mb-4">
      <i class="fa fa-user-circle fa-3x text-info mb-2"></i>
      <h3 class="fw-bold text-info">Login to E-Shop</h3>
    </div>

    <form action="actions/register.php" method="POST">
      
      <!-- Email Field -->
      <div class="mb-3 position-relative">
        <i class="fa fa-envelope text-secondary position-absolute" 
           style="top: 12px; left: 15px;"></i>
        <input type="email" 
               class="form-control ps-5" 
               id="email" 
               name="email" 
               placeholder="Email address" 
               required>
      </div>

      <!-- Password Field -->
      <div class="mb-3 position-relative">
        <i class="fa fa-lock text-secondary position-absolute" 
           style="top: 12px; left: 15px;"></i>
        <input type="password" 
               class="form-control ps-5" 
               id="password" 
               name="password" 
               placeholder="Password" 
               required>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="btn btn-info w-100 text-white fw-bold">
        <i class="fa fa-sign-in"></i> Login
      </button>

      <div class="text-center mt-3">
        <small>Don't have an account? 
          <a href="register.php" class="text-info fw-semibold">Register here</a>
        </small>
      </div>

    </form>
  </div>
</div>

<?php include('includes/footer.php'); ?>
