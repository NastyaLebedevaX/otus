<?php

require_once 'connect.php';

$_SESSION['user_id'] = null;
$_SESSION['user_name'] = null;
$_SESSION['user_role'] = null;
$_SESSION['notification'] = null;
header('Location: /');