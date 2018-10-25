<?php
namespace App\Controller;


use App\Entity\Contact;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends Controller
{
    /**
     * @Route(
     *     name="api_contact_email_post",
     *     path="/api/contact/email",
     *     methods={"POST"},
     * )
     */
    public function __invoke(Request $request)
    {
        $data = $request->getContent();
        var_dump($data);

        return new Response('', Response::HTTP_CREATED);
    }
}
