<?php

namespace EscritorBundle\Controller;

use EscritorBundle\Entity\DwTestTexto;
use EscritorBundle\Form\DwTestTextoType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class EscritorController extends Controller
{

    /**
     * @Route("/{_locale}/escritor")
     */
    public function formAction(Request $request){
        $texto = new DwTestTexto();
        $form = $this->createForm(DwTestTextoType::class, $texto);

        $form->handleRequest($request);

        if ($form->isValid()) {
            // guardar la tarea en la base de datos
            $em = $this->getDoctrine()->getManager();
            $em->persist($texto);
            $em->flush();
        }

        return $this->render('EscritorBundle:Default:escritor.html.twig', array(
            'form' => $form->createView()
        ));
    }

}