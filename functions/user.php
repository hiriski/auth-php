
<?php

/** function escape */
function escape($param) {
  global $connect;
  return mysqli_real_escape_string($connect, $param);
}



/** (Refactor) function check email ketika signup dan signin */
function check_email($email) {
  global $connect;

  $email = escape($email);
  $query_check_email = "SELECT * FROM users WHERE email='$email'";

  /* hasil qyery sekaligus di uji */
  if ($result = mysqli_query($connect, $query_check_email) ) {
    return mysqli_num_rows($result);
  }
}




/** Register User */
function register_user($input_name, $input_email, $input_pass, $input_pass_verify) {

  /** panggil vaiable $connect dari global */
  global $connect;

  /** security sql injection */
  $name     = escape($input_name);
  $email    = escape($input_email);
  $password = escape($input_pass);


  /* jika password dan password verify sama lanjutkan programnya
    tapi jika tidak sama keluarkan alert() */
  if($input_pass === $input_pass_verify) {

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
  else {
    alert('danger', 'Confirm password do not match');
  }
}


/** Login */
function check_credentials($email, $password) {
  global $connect;
  $email    = escape($email);
  $password = escape($password);

  $query_select_pass = "SELECT password FROM users WHERE email='$email'";

  $result = mysqli_query($connect, $query_select_pass);
  
  /** Keluarkan datanya 
      * KET : karena hanya 1 data maka keluarkan langsung nggak harus di loop 
      * INGAT! meskipun resultnya hanya 1 data tapi hasilnya berbentuk object
      * sesuai dengan fungsi fetch yang digunakan (object atau array) */
  $result_pass = mysqli_fetch_object($result);

  /** jika result kosong return false; */
  if(!$result_pass) {
    return false;
  }

  /** Mencocokan password yang sudah di hash (Verify) dan string yang dimasukan oleh user
  * Fungsi ini punya 2 parameter 
  * param 1 string yang dimasukan user 
  * param 2 password yang sudah di hash di db */
  if (password_verify($password, $result_pass->password)) { //<< password dalam object
    return true;
  } else {
    return false;
  }

}



?>