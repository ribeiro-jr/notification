<?php

namespace Notification;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email{

    private $mail;

    public function __construct() {

        $this->mail = new PHPMailer(true);
        $this->mail->SMTPDebug = 2;
        $this->mail->isSMTP();
        $this->mail->Host = 'mail.vanilsonribeiro.me';
        $this->mail->SMTPAuth = true;
        $this->mail->Username = 'ribeiro@gmail.com';
        $this->mail->Password = '12345';
        $this->mail->SMTPSecure = 'tls';
        $this->mail->Port = 587;
        $this->mail->CharSet = 'utf-8';
        $this->mail->setLanguage('pt');
        $this->mail->isHTML(true);

        $this->mail->setFrom('ribeirovanilson@gmail.com', 'Vanilson Ribeiro');

    }

    public function sendEmail($subject, $body, $replyEmail, $replyName, $addressEmail, $addressName)
    {
        $this->mail->Subject = (string)$subject;
        $this->mail->Body = $body;

        $this->mail->addReplyTo($replyEmail, $replyName);
        $this->mail->addAddress($addressEmail, $addressName);

        try {

            $this->mail->send();

        } catch (Exception $e) {
            echo "Erro ao enviar e-mail: {$this->mail->ErrorInfo} {$e->getMessage()}";
        }
    }
}