<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
class ArticleController extends AbstractController
{
    /**
     * @Route("/article/vetement", name="article/vetement")
     */

    public function ArticleShow(Request $request)
    {

        $vetement = 'Vêtement';
        $maillotVitality = 'Maillot Vitality';

        return $this->render('article.html.twig', [
            'vetement' => $vetement,
            'nom_article' => $maillotVitality
        ]);
    }
}
?>