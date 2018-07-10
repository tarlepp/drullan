<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FooBarRepository")
 */
class FooBar
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="guid")
     */
    private $ID;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    public function getId()
    {
        return $this->id;
    }

    public function getID(): ?string
    {
        return $this->ID;
    }

    public function setID(string $ID): self
    {
        $this->ID = $ID;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }
}
