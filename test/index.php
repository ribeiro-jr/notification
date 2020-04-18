<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$email = new Email(
    2, 
    'smtp.sendgrid.net', 
    'apikey', 
    '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', 
    'tls', 
    '587', 
    'ribeirovanilson85@gmail.com', 
    'Suporte'
);

$email->sendEmail(
    "Teste",
    "<p>Email de teste - <b>Composer na prática</b></p>",
    "vanilson.ribeiro@infosi.gov.ao",
    "Ribeiro Junior",
    "ribeirovanilson85@gmail.com",
    "Vanilson Ribeiro"
);

var_dump($email);

