<?php
$nameErr = null;
$passwordErr = null;
$phoneErr = null;

if ($_SERVER["REQUEST_METHOD"] = $_POST) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $pswRepeat = $_POST['psw-repeat'];
    $mad5 = md5($password);

    if (empty($email)) {
        $nameErr = "Tên email không được để trống!";
    }

    if (empty($password)) {
        $passwordErr = " Passsword  không được để trống! ";
    }

    if (empty($pswRepeat)) {
        $phoneErr = " Repeat Password không được để trống!";
    }
}
?>