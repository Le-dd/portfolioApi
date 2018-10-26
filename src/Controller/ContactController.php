<?php
namespace App\Controller;


use App\Entity\Contact;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Validator\ValidatorInterface;

use App\Service\EmailService;

class ContactController extends Controller
{
    /**
     * @Route(
     *     name="api_contact_email_post",
     *     path="/api/contact/email",
     *     methods={"POST"},
     * )
     */
    public function __invoke(Request $request,EmailService $emailService,ValidatorInterface $validator)
    {
        $email = json_decode($request->getContent(),true);

        $emailConstraint = new Assert\Email();
        $emailConstraint->message = 'Invalid email address';
        $errorsEmail = $validator->validate(
        $email["email"],
        $emailConstraint
        );

        $validateConstraint = new Assert\NotBlank();
        $validateConstraint->message = 'This value is blank';

        $errorsBlankName = $validator->validate(
        $email["name"],
        $validateConstraint
        );
        $errorsBlankEmail = $validator->validate(
        $email["email"],
        $validateConstraint
        );
        $errorsBlankSubject = $validator->validate(
        $email["subject"],
        $validateConstraint
        );
        $errorsBlankMessage = $validator->validate(
        $email["message"],
        $validateConstraint
        );

        if (0 === count($errorsEmail) && 0 === count($errorsBlankName)&& 0 === count($errorsBlankEmail)&& 0 === count($errorsBlankSubject)&& 0 === count($errorsBlankMessage)) {
          $email["name"] = trim(strip_tags($email["name"]));
          $email["subject"] = trim(strip_tags($email["subject"]));
          $email["message"] = trim(strip_tags($email["message"]));
          $emailService->email($email["name"],$email["email"],$email["subject"],$email["message"],'emeric.lebbrecht@gmail.com');
          return new Response('', Response::HTTP_CREATED);
        } else {
          return new Response('fail', Response::HTTP_BAD_REQUEST);
        }


    }
}
