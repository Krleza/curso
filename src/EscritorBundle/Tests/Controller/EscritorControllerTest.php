<?php

namespace EscritorBundle\Tests\Controller;

use Doctrine\Tests\Common\Collections\TestObject;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Form\Tests\Extension\Core\Type;
use Symfony\Component\Form\Test\TypeTestCase;


class DefaultControllerTest extends WebTestCase
{
    /**
     *
     */
    public function testFormAction()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/{_locale}/escritor');

        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("Procesador de Textos")')->count()
        );

        $form = $crawler->selectButton('submit')->form();

        // sustituye algunos valores
        $form['dw_test_texto_titulo'] = 'test nombre';
        $form['dw_test_texto_texto'] = 'test texto';

        // envía el formulario
        $client->submit($form);

        $this->assertTrue($client->getResponse()->isSuccessful());

    }

}
