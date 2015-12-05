<?php

namespace pedagogique\GestionClasseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('pedagogiqueGestionClasseBundle:Default:index.html.twig', array('name' => $name));
    }
}
