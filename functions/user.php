
<?php


/** Register User */
function register_user($name, $email, $password) {

  /** panggil vaiable $connect dari global */
  global $connect;

  /** security sql injection */
  $name     = mysqli_real_escape_string($connect, $name);
  $email    = mysqli_real_escape_string($connect, $email);
  $password = mysqli_real_escape_string($connect, $password);

  /** hash dulu passwordnya */
  $password = password_hash($password, PASSWORD_DEFAULT);

  /** query signup */
  $signup_query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

  if($connect->query($signup_query)) {
    return true;
  } else {
    return false;
  }

}



?>