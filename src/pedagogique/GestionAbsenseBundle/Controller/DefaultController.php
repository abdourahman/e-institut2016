<?php

namespace pedagogique\GestionAbsenseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('pedagogiqueGestionAbsenseBundle:Default:index.html.twig', array('name' => $name));
    }
}
