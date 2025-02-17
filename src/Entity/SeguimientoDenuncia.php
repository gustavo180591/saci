<?php

namespace App\Entity;

use App\Repository\SeguimientoDenunciaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SeguimientoDenunciaRepository::class)]
class SeguimientoDenuncia
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $estado_anterior = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEstadoAnterior(): ?string
    {
        return $this->estado_anterior;
    }

    public function setEstadoAnterior(string $estado_anterior): static
    {
        $this->estado_anterior = $estado_anterior;

        return $this;
    }
}
