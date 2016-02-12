<?php

namespace EscritorBundle\Services;

use EscritorBundle\Entity\DwTestTexto;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ServiceTest extends Controller {
    protected $id;

    public function __construct() {
        $this->container = 'id';
    }

    public function showText($id) {

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

        return $texto;

    }

}