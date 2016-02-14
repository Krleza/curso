<?php

namespace EscritorBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndexAction()
    {
        $t = static::createClient();

        $t->request('GET', '/');

        $this->assertContains('Procesador de Textos', $t->getResponse()->getContent());
    }

    public function testRegisterAction(){
        $t = static::createClient();

        $t->request('GET', '/{_locale}/registro');

        $this->assertContains('Procesador de Textos', $t->getResponse()->getContent());
    }
}
