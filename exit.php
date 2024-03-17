<?php

require_once 'connect.php';

$_SESSION['user_id'] = null;
$_SESSION['notification'] = null;
header('Location: /');