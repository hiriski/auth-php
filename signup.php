<?php include 'views/header.php'; ?>
<?php require_once('functions/database.php'); ?>



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
                <input type="text" name="email" class="form-control">
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