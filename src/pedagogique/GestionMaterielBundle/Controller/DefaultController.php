<?php

namespace pedagogique\GestionMaterielBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('pedagogiqueGestionMaterielBundle:Default:index.html.twig', array('name' => $name));
    }
}
