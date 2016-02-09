<?php

namespace EscritorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class EscritorController extends Controller
{
    /**
     * @Route("/escritor")
     */
    public function indexAction()
    {
        return $this->render('EscritorBundle:Default:escritor.html.twig');
    }

    /**
     * @Route("/escritor?texto={t}", defaults={"t" = "texto por defecto"})
     */
    public function saveText($t)
    {
        return new Response('<html><body>'.$t.'!</body></html>');
    }
}