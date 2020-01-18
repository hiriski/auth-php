<?php
/** file ini adalah initialize
    * jadi nanti saya akan memasukan data2 function yang saya butuhkan
    * misalnya mau masukin function database, user atau mau mulai session
    * Saya akan memulai dari file ini.php semuanya.
    * Jadi, setiap saya butuh semua fungsi2 itu saya hanya tinggal include file init.php ini  */

/** Start Session */
session_start();

require_once('functions/database.php');
require_once('functions/user.php');
require_once('functions/notif.php');


?>