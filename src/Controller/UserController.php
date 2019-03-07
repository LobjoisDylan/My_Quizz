<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
    * @Route("/quizz", name="user")
    */
    public function index()
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    /**
    * @Route("/", name="home")
    */
    public function home() {
        return $this->render('user/home.html.twig', [
            'title' => "Bonjour",
            'age' => 19
        ]);
    }

    /**
    * @Route("/quizz/12", name="show_quizz")
    */
    public function show()
    {
        return $this->render('user/show.html.twig');
    }
}
