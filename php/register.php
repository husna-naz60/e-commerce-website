<?php include('includes/header.php'); ?>

<?php if (!empty($_GET['error'])) { ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert" id="myAlert">
    ❌ <strong>Warning!</strong> <?php echo htmlspecialchars($_GET['error']); ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php } elseif (!empty($_GET['success'])) { ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert" id="myAlert">
    ✅ <strong>Success!</strong> <?php echo htmlspecialchars($_GET['success']); ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  
<?php } ?><br>

<!-- ✅ Auto-hide after 4 seconds -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const alert = document.getElementById('myAlert');
    if (alert) {
      setTimeout(() => {
        const bsAlert = new bootstrap.Alert(alert);
        bsAlert.close();
      }, 4000); // 4000ms = 4 seconds
    }
  });
</script>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
  
  <div class="card shadow-lg p-4" style="max-width: 420px; width: 100%; border-radius: 15px;">
    <div class="text-center mb-4">
      <i class="fa fa-user-plus fa-3x text-info mb-2"></i>
      <h3 class="fw-bold text-info">Create Your Account</h3>
    </div>

    <form action="actions/register.php" method="POST">

      <!-- Full Name -->
      <div class="mb-3 position-relative">
        <i class="fa fa-user text-secondary position-absolute" style="top: 12px; left: 15px;"></i>
        <input type="text" 
               class="form-control ps-5" 
               id="name" 
               name="name" 
               placeholder="Full Name" 
               required>
      </div>

      <!-- Email -->
      <div class="mb-3 position-relative">
        <i class="fa fa-envelope text-secondary position-absolute" style="top: 12px; left: 15px;"></i>
        <input type="email" 
               class="form-control ps-5" 
               id="email" 
               name="email" 
               placeholder="Email Address" 
               required>
      </div>

      <!-- WhatsApp Number -->
      <div class="mb-3 position-relative">
        <i class="fa fa-whatsapp text-secondary position-absolute" style="top: 12px; left: 15px;"></i>
        <input type="number" 
               class="form-control ps-5" 
               id="whatsapp" 
               name="whatsapp" 
               placeholder="WhatsApp Number (e.g. +92 300 1234567)" 
               required 
               maxlength="12"
               >
      </div>

      <!-- Password -->
      <div class="mb-3 position-relative">
        <i class="fa fa-lock text-secondary position-absolute" style="top: 12px; left: 15px;"></i>
        <input type="password" 
               class="form-control ps-5" 
               id="password" 
               name="password" 
               placeholder="Password" 
               required>
      </div>

      <!-- Confirm Password -->
      <div class="mb-3 position-relative">
        <i class="fa fa-lock text-secondary position-absolute" style="top: 12px; left: 15px;"></i>
        <input type="password" 
               class="form-control ps-5" 
               id="confirm_password" 
               name="confirm_password" 
               placeholder="Confirm Password" 
               required>
      </div>

      
      <!-- Gender -->
      <div class="mb-3">
        <label class="form-label fw-semibold text-secondary">Gender</label>
        <div class="d-flex justify-content-around">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="male" value="Male" required>
            <label class="form-check-label" for="male"><i class="fa fa-mars text-info"></i> Male</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="female" value="Female" required>
            <label class="form-check-label" for="female"><i class="fa fa-venus text-danger"></i> Female</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="other" value="Other" required>
            <label class="form-check-label" for="other"> Other</label>
          </div>
        </div>
      </div>

      <!-- Register Button -->
      <button type="submit" class="btn btn-info w-100 text-white fw-bold">
        <i class="fa fa-user-plus"></i> Register
      </button>

      <div class="text-center mt-3">
        <small>Already have an account? 
          <a href="login.php" class="text-info fw-semibold">Login here</a>
        </small>
      </div>

    </form>
  </div>
</div>




<?php include('includes/footer.php'); ?>