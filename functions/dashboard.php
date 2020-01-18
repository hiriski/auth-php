<?php

if(isset($_SESSION['user'])) {
    $user_email = $_SESSION['user'];
    $query_select = "SELECT name, email FROM users WHERE email='$user_email'";
    $result = mysqli_query($connect, $query_select);
    if ($result) {
        $user = mysqli_fetch_object($result);
    } else {
        alert('danger', 'User not found!');
    }
}

?>