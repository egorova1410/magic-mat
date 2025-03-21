<?php
session_start();
session_unset();
session_destroy();
header('Location: ../../User/Auth/Auth.php');
exit();

