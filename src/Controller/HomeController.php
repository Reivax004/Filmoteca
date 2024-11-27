<?php

namespace App\Controller;

class HomeController
{
    public function list(array $queryParams)
    {

        $twig = TwigEnvironment::create();


        echo $twig->render('Home.html.twig');

    }


}