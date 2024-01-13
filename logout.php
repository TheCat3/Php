<?php

// start ociserverversion
session_start();
session_unset(); //unset the data
session_destroy();
header('Location:login.php');
exit();
