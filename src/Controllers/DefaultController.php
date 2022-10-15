<?php

namespace SymfonyVue\Controllers;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    public function __invoke(): Response
    {
        return $this->render('base.html.twig');
    }

}
