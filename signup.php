<?php include 'views/header.php'; ?>
<?php require_once('functions/database.php'); ?>
<?php require_once('core/init.php'); ?>

<?php

function signup() {
  $name     = $_POST['name'];
  $email    = $_POST['email'];
  $password = $_POST['password'];

  /** pastikan user mengisi name email dan passwordnya + di trim() */
  if ( !empty(trim($name)) && !empty(trim($email)) && !empty(($password)) ) {
    if(register_user($name, $email, $password)){
      notification('success', 'Register success!');
    } else {
      notification('danger', 'Register failed!');
    }
  }
  else {
    notification('warning', 'Isi datanya dong gan');
  }
}


if(isset($_POST['submit'])) {
  signup();
}


?>


<div id="auth_php" class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-lg-5 mx-auto">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Register</h3>
            <form action="" method="POST">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
              </div>
              <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary" value="Register">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include 'views/footer.php'; ?>