<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ToDoController extends AbstractController
{
    #[Route('/to', name: 'app_to_do')]
    public function indexAction(Request $request): Response
    {
        $session = $request->getSession();

        // si dans ma session il n'y a pas le todos, alors j'affiche le tableau ci dessous, sinon j'affiche ce qui est déjà affiché
        if( $session->has('todos')){
            $todos = [
                'achat' => 'acheter clé usb',
                'cours' => 'finanliser mon cours',
                'correction'=> 'corriger mes examens',
            ];
            $session->set('todos', $todos);
        }
        else{
            return $this->render('to_do/listeToDo.html.twig', [
                
            ]);
        }

        
    }
}
