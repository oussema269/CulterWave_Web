<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MyControllerMailer extends AbstractController
{
    public function sendmail(MailerInterface $mailer)
    {
        $email = (new Email())
            ->from('mohammad.hafez@esprit.tn')
            ->to('mhmad.hafez@hotmail.tn')
            ->subject('Test email')
            ->text('This is a test email');

        $mailer->send($email);
    }
}
