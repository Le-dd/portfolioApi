<?php

namespace App\Service;
use Symfony\Component\DependencyInjection\ContainerInterface;
use NotFloran\MjmlBundle\Mjml;


class EmailService {

    /**
     * @var \Swift_Mailer
     */
    private $mailer;
    /**
     * @var \Twig_Environment
     */
    private $twig;

    /**
     * @var Mjml
     */
    private $mjml;

    public function __construct(\Swift_Mailer $mailer, \Twig_Environment $twig, Mjml $mjml)
    {
        $this->mailer = $mailer;
        $this->twig = $twig;
        $this->mjml =$mjml ;
    }

  public function email(string $name,string $emailFrom,string $subject,string $message,string $emailTo){

    $message = (new \Swift_Message($subject))
        ->setFrom($emailFrom)
        ->setTo($emailTo)
        ->setBody(
          $this->mjml->render(
            $this->twig->render('emails/emailForMe.mjml.twig',[
                  'name' => $name,
                  'bodyMail' => $message
                ])
        ),
        'text/html'
        )
        ->addPart(
            $this->twig->render('emails/emailForMe.text.twig',[
                  'name' => $name,
                  'bodyMail' => $message
                ]),
            'text/plain'
        );

    $this->mailer->send($message);


}



}
