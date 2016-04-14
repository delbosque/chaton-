<?php

namespace ChatonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('ChatonBundle:Default:index.html.twig');
    }
    /**
     * @Route("/miaule")
     */
    public function miaule()
    {
    	$miaule = new Response();
    	$miaule ->setContent('Miouuu');

    	return $miaule;
    }

    /**
     * @Route("/mange")
     */
    public function mange()
    {
    	$mange = new Response();
    	$mange ->setContent('Miammm');

    	return $mange;
    }
}
