<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<body>
  <?php
  session_start();
  include '../common/config.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = mysqli_real_escape_string($conn, $_POST['email-username']);
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$input' OR username = '$input'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) == 1) {
      $user = mysqli_fetch_assoc($result);

      if (password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: dashboard.php");
        exit();
      } else {
        $error = "Invalid password!";
      }
    } else {
      $error = "User not found!";
    }
  }
  ?>
  <?php include('../common/head.php'); ?>
  
  <div class="container-xxl">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-5">
        <div class="authentication-wrapper authentication-basic container-p-y">
          <div class="authentication-inner">
            <div class="card">
              <div class="card-body">
                <div class="app-brand justify-content-center">
                  <a href="" class="app-brand-link gap-2">
                    <span class="app-brand-logo demo">
                      <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <!-- SVG content here -->
                      </svg>
                    </span>
                    <span class="app-brand-text demo text-body fw-bolder mb-3">Login</span>
                  </a>
                </div>
                <h4 class="mb-2 text-center">Welcome to Admin Panel</h4>
                <?php if (isset($error)): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
                <?php endif; ?>
                <form method="POST">
                  <div class="mb-3">
                    <label for="email" class="form-label">Email or Username</label>
                    <input type="text" class="form-control" id="email" name="email-username" required />
                  </div>
                  <div class="mb-3 form-password-toggle">
                    <label class="form-label" for="password">Password</label>
                    <div class="input-group input-group-merge">
                      <input type="password" id="password" class="form-control" name="password" required />
                    </div>
                  </div>
                  <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                </form>
                <p class="text-center mt-3">
                  <a href="register.php">Create account</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'common/footer.php'; ?>
</body>
</html>