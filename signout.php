<?php

/** mulai session */
session_start();

/** hancurkan session */
session_destroy();

header('Location: signin.php');

?>