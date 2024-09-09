<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/{name}', name: 'home', methods: ['GET'])] // Ceci est une annotation PHP, ici elle permet de définir une route pour le contrôleur et ses paramètres.
    public function index(): Response // Ceci est le contrôleur qui va être appelé lorsque l'utilisateur accède à la page '/'
    {
        $name = ''; // Nous allons l'envoyer à la vue.
        return $this->render('home/index.html.twig', [ // La méthode render() de la classe AbstractController permet de renvoyer un template avec des données.
            'name' => $name ?? 'Nobody', // Si le paramètre n'est pas renseigné, on lui donne un nom par défaut.
        ]);
    }
}
