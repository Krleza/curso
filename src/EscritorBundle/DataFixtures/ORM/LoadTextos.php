<?php
/**
 * Created by PhpStorm.
 * User: pablo
 * Date: 03/02/2016
 * Time: 1:06
 */

namespace Acme\HelloBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EscritorBundle\Entity\DwTestTexto;

class LoadUserData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $texto = new DwTestTexto();
        $texto->setTitulo('Prueba de Título');
        $texto->setTexto('Esto es un texto para la base de datos mediante fixtures');

        $manager->persist($texto);
        $manager->flush();
    }
}