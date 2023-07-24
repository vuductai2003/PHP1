<?php
session_start();
echo 'Xin chúc mừng,tài khoản của bạn đã bị hack <br>';
$name = $_SESSION['user'];
echo "Xin chào: {$name}";