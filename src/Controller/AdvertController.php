<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class AdvertController
{
    public function index(Environment $twig)
    {
        $content = $twig->render('Advert/index.html.twig', ['name' => 'Aisha']) ;
        return new Response($content);
    }
}
