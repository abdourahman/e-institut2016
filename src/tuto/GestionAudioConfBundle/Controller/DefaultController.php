<?php

namespace tuto\GestionAudioConfBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('tutoGestionAudioConfBundle:Default:index.html.twig', array('name' => $name));
    }
}
