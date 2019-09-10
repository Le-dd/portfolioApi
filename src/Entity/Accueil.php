<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
 *   collectionOperations={"get"},
 *   itemOperations={"get"}
 * )
 * @ORM\Entity(repositoryClass="App\Repository\AccueilRepository")
 */
class Accueil
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $titlePresentation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imgPresentation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $altImgPresentation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titleMonPasse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imgMonPasse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $altImgMonPasse;

    /**
     * @ORM\Column(type="text")
     */
    private $textMonPasse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titleMonAvenir;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imgMonAvenir;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $altImgMonAvenir;

    /**
     * @ORM\Column(type="text")
     */
    private $textMonAvenir;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitlePresentation(): ?string
    {
        return $this->titlePresentation;
    }

    public function setTitlePresentation(string $titlePresentation): self
    {
        $this->titlePresentation = $titlePresentation;

        return $this;
    }

    public function getImgPresentation(): ?string
    {
        return $this->imgPresentation;
    }

    public function setImgPresentation(string $imgPresentation): self
    {
        $this->imgPresentation = $imgPresentation;

        return $this;
    }

    public function getAltImgPresentation(): ?string
    {
        return $this->altImgPresentation;
    }

    public function setAltImgPresentation(string $altImgPresentation): self
    {
        $this->altImgPresentation = $altImgPresentation;

        return $this;
    }

    public function getTitleMonPasse(): ?string
    {
        return $this->titleMonPasse;
    }

    public function setTitleMonPasse(string $titleMonPasse): self
    {
        $this->titleMonPasse = $titleMonPasse;

        return $this;
    }

    public function getImgMonPasse(): ?string
    {
        return $this->imgMonPasse;
    }

    public function setImgMonPasse(string $imgMonPasse): self
    {
        $this->imgMonPasse = $imgMonPasse;

        return $this;
    }

    public function getAltImgMonPasse(): ?string
    {
        return $this->altImgMonPasse;
    }

    public function setAltImgMonPasse(string $altImgMonPasse): self
    {
        $this->altImgMonPasse = $altImgMonPasse;

        return $this;
    }

    public function getTextMonPasse(): ?string
    {
        return $this->textMonPasse;
    }

    public function setTextMonPasse(string $textMonPasse): self
    {
        $this->textMonPasse = $textMonPasse;

        return $this;
    }

    public function getTitleMonAvenir(): ?string
    {
        return $this->titleMonAvenir;
    }

    public function setTitleMonAvenir(string $titleMonAvenir): self
    {
        $this->titleMonAvenir = $titleMonAvenir;

        return $this;
    }

    public function getImgMonAvenir(): ?string
    {
        return $this->imgMonAvenir;
    }

    public function setImgMonAvenir(string $imgMonAvenir): self
    {
        $this->imgMonAvenir = $imgMonAvenir;

        return $this;
    }

    public function getAltImgMonAvenir(): ?string
    {
        return $this->altImgMonAvenir;
    }

    public function setAltImgMonAvenir(string $altImgMonAvenir): self
    {
        $this->altImgMonAvenir = $altImgMonAvenir;

        return $this;
    }

    public function getTextMonAvenir(): ?string
    {
        return $this->textMonAvenir;
    }

    public function setTextMonAvenir(string $textMonAvenir): self
    {
        $this->textMonAvenir = $textMonAvenir;

        return $this;
    }
}
