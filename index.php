<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;

$email = new Email;
$email->sendEmail(
    "Teste",
    "<p>Email de teste - Composer na prática<p>",
    "ribeiro1@gmail.com",
    "Ribeiro Junior",
    "ribeiro2@gmail.com",
    "Hernani Manuel"
);

var_dump($email);

