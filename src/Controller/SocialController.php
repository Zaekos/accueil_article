<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
class SocialController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */

    public function ContactShow(Request $request)
    {

        $title = 'Contact';


        return $this->render('contact.html.twig', [
            'title' => $title
        ]);
    }

    /**
     * @Route ("/profil", name="profil")
     */
    public function ProfilShow(Request $request)
    {
        $title = 'Profil';

        return $this->render('profil.html.twig',[
            'title' => $title
        ]);
    }
}
?>