<div class="login-wrapper">
  <div class="login-box">
    <div class="text-center login-logo">
      <span><i class="fas fa-tshirt"></i> ERP Login</span>
    </div>

    <div class="error-message">
      <?php echo isset($error) ? $error : ""; ?>
    </div>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      <p class="text-center text-muted">Sign in to start your session</p>

      <div class="mb-3 position-relative">
        <input type="text" class="form-control" name="username" id="txtUsername" placeholder="User name" value="admin">
        <i class="fas fa-user form-icon"></i>
      </div>

      <div class="mb-3 position-relative">
        <input type="password" class="form-control" name="password" id="txtPassword" placeholder="Password" value="111111">
        <i class="fas fa-lock form-icon"></i>
      </div>

      <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="chkRemember">
          <label class="form-check-label" for="chkRemember">Remember Me</label>
        </div>
        <a href="forgot-password.html" class="small">Forgot password?</a>
      </div>

      <button type="submit" name="SignIn" class="btn btn-success w-100">Sign In</button>
    </form>
  </div>
</div>