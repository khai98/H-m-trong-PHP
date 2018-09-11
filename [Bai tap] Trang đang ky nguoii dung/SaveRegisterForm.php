<?php
$nameErr = null;
$passwordErr = null;
$phoneErr = null;

if ($_SERVER["REQUEST_METHOD"] = $_POST) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $pswRepeat = $_POST['psw-repeat'];
    $md5 = null;

    if (empty($email)) {
        $nameErr = "Tên email không được để trống!";
    }

    if (empty($password)) {
        $passwordErr = " Passsword  không được để trống! ";
    }else {
        $md5 = md5($password);
    }

    if (empty($pswRepeat)) {
        $phoneErr = " Repeat Password không được để trống!";
    }

    pushDataJason("json.json", $email, $md5);
}

function loadContents()
{
    $dataJason = file_get_contents("json.json");
    $arrJason = json_decode($dataJason, true);
    return $arrJason;
}
function pushDataJason($filename, $email, $md5)

{
    $contact = array(
        "email" => $email,
        "password" => $md5
    );

    $arrJason = loadContents();
    array_push($arrJason, $contact);
    $dataJson = json_encode($arrJason);
    $jsonPush = file_put_contents($filename, $dataJson);

}

?>