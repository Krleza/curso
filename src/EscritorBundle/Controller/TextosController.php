<?php

namespace EscritorBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class TextosController
{
    /**
     * @Route("/texto/{id}", defaults={"id" = 1})
     */
    public function imprimeTexto($id)
    {
        switch ($id) {
            case 1:
                $texto = 'Texto uno';
                break;
            case 2:
                $texto = 'Texto dos';
                break;
            case 3:
                $texto = 'Texto tres';
                break;
            default:
                $texto = 'Texto por defecto';
                break;
        }


        return new Response('<html><body>'.$texto.'!</body></html>');
    }
}