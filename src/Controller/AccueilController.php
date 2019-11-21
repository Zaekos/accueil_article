<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
class AccueilController extends AbstractController
{
    /**
     *
     * @Route("/accueil", name="accueil")
     */
    public function AccueilShow(Request $request)
    {
        $vetement = 'Vêtement';


        return $this->render('accueil.html.twig', [
            'vetement' => $vetement,

        ]);
    }




}

?>