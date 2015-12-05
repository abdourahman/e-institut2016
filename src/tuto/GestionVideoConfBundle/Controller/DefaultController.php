<?php

namespace tuto\GestionVideoConfBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('tutoGestionVideoConfBundle:Default:index.html.twig', array('name' => $name));
    }
}
