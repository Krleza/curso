<?php

namespace EscritorBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class TextosController  extends Controller
{
    /**
     * @Route("/texto/{id}", defaults={"id" = 1})
     */
    public function imprimeTexto($id)
    {
        $servicio = $this->get('service_test');
        $texto = $servicio->showText($id);

        return new Response('<html><body>'.$texto.'!</body></html>');
    }
}