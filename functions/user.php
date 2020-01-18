
<?php

/** Cek email ketika register (menguji nama kembar) */
function check_email($email) {
  global $connect;

  $email = mysqli_real_escape_string($connect, $email);
  $query_check_email = "SELECT * FROM users WHERE email='$email'";

  /* hasil qyery */
  $result = mysqli_query($connect, $query_check_email);

  /* uji apakah querynya berhasil */
  if ($result) {
    /* lihat apakah di db ada email yang sama dengan yang dimasukan user ? */
    /* jika hasil pengujian ini adalah 0 berarti tidak ada */
    if (mysqli_num_rows($result) == 0) {
      return true;
    }
  } else {
    die("Ada kesalahan");
  }

}




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