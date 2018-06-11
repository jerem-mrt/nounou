<?php
include 'func_login.php';


if (isset($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];
var_dump($password);

if ($_POST='nounou') {
    connectMail($bd, 'nounou', $email, $password);
}
else if ($_POST='parent') {
    connectMail($bd, 'parent', $email, $password);
}
}
?>