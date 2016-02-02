<?php

namespace EscritorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DwTestTexto
 *
 * @ORM\Table(name="dw_test_texto")
 * @ORM\Entity
 */
class DwTestTexto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=150, nullable=true)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="texto", type="text", nullable=true)
     */
    private $texto;


}

