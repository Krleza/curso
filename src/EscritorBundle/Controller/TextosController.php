<?php

namespace EscritorBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;



class TextosController  extends Controller
{
    /**
     * @Route("/{_locale}/texto/{id}", defaults={"id" = 1})
     */
    public function imprimeTexto($id)
    {
        $logger = $this->get('logger');

        $servicio = $this->get('service_test');
        $texto = $servicio->showText($id);

        $logger->info('escribo texto');

        $translated = $this->get('translator')->trans('Symfony mola!');

        return new Response('<html><body>' . $translated . '</body></html>');
    }

}