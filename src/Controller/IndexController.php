<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController 
{
    #[Route('/{name}', name: 'app_home', defaults: ['name' => 'World'])]
    public function home()
    {
        $articles = ['Artcile1', 'Article 2','Article 3'];
        return $this->render('articles/index.html.twig',['articles' => $articles]);
    }
}
