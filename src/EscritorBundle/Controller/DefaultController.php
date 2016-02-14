<?php

namespace EscritorBundle\Controller;

use EscritorBundle\Entity\DwUser;

use EscritorBundle\Form\DwUserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    /**
     * @Route("/{_locale}/index")
     */
    public function indexAction()
    {
        return $this->render('EscritorBundle:Default:index.html.twig');
    }

    /**
     * @Route("/admin")
     */
    public function adminAction()
    {
        return new Response('<html><body>Pagina con clave</body></html>');
    }

    /**
     * @Route("/{_locale}/registro")
     */
    public function registerAction(Request $request)
    {
        $user = new DwUser();
        $form = $this->createForm(DwUserType::class, $user);

        $form->handleRequest($request);

        if ($form->isValid()) {
            // guardar la tarea en la base de datos
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
        }

        return $this->render('EscritorBundle:security:signup.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
