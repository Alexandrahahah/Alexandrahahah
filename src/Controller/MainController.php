<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request as BrowserKitRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'main')]
    public function index(): Response
    {
       
        return $this->render('main/index.html.twig', [
           'name' => 'Jacob',
           'prenom'=> 'Alexandra',
        
          
        ]);

    }
    #[Route('/hello/{name}', name: 'hello')]
    public function sayHello($name): Response

     
    {
       
        return $this->render('main/hello.html.twig', [
            'nom' => $name,
    ]);

    }

}
