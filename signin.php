<?php include 'views/header.php'; ?>
<?php require_once('functions/database.php'); ?>
<?php require_once('core/init.php'); ?>

<?php
function signin() {
  $email    = $_POST['email'];
  $password = $_POST['password'];

  /** pastikan user tidak mengisi data kosong */
  if ( !empty(trim($email)) && !empty(($password)) ) {

    /* Periksa credentials user */
    if (check_credentials($email, $password)) {
      alert('success', 'Login Success!');
    } else {
      alert("danger", "Email or password it's wrong!");
    }
  } else {
    alert('warning', 'Isi datanya dong gan');
  }

}

if (isset($_POST['submit'])) {
  signin();
}

?>


<div id="auth_php" class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-lg-5 mx-auto">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Login</h3>
            <form action="" method="POST">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
              </div>
              <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary" value="Login">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include 'views/footer.php'; ?>