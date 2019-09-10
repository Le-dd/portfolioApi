<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ApiResource(
 *   collectionOperations={"get"},
 *   itemOperations={"get"}
 * )
 * @ORM\Entity(repositoryClass="App\Repository\CreaToTechRepository")
 */
class CreaToTech
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Techno")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idTechno;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Creation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idCrea;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdTechno(): ?techno
    {
        return $this->idTechno;
    }

    public function setIdTechno(?techno $idTechno): self
    {
        $this->idTechno = $idTechno;

        return $this;
    }

    public function getIdCrea(): ?creation
    {
        return $this->idCrea;
    }

    public function setIdCrea(?creation $idCrea): self
    {
        $this->idCrea = $idCrea;

        return $this;
    }
}
