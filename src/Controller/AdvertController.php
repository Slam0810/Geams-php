<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\RouterInterface;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Request;

class AdvertController extends AbstractController
{
    /**
    * @Route("/advert", name="oc_advert_index")
    */
    public function index(RouterInterface $router)
    {
        $url = $this->generateUrl(
            'oc_advert_view',
            ['id' => 5]
        );
        return new Response("L'URL de l'annonce d'id 5 est ".$url);
    }
    public function view($id, Request $request)
    {
        $tag = $request->query->get('tag');
        return new Response("Affichage de l'annonce d'id : ".$id.", avec le tag :" .$tag);
    }
    public function viewSlug($slug, $year, $format)
    {
        return new Response(
            "On pourrait afficher l'annonce correspondant au
    slug '".$slug."', créée en ".$year." et au format ".$format."."
        );
    }
}
