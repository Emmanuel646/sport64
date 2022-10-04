<?php

namespace App\Entity;

use App\Repository\OptionsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OptionsRepository::class)]
class Options
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?string $name = null;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return Options
     */
    public function setName(?string $name): Options
    {
        $this->name = $name;
        return $this;
    }

    #[ORM\Column(nullable: true)]
    private ?bool $gestabon = null;

    #[ORM\Column(nullable: true)]
    private ?bool $gestsalarie = null;

    #[ORM\Column(nullable: true)]
    private ?bool $geststocks = null;

    #[ORM\Column(nullable: true)]
    private ?bool $gestmat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isGestabon(): ?bool
    {
        return $this->gestabon;
    }

    public function setGestabon(?bool $gestabon): self
    {
        $this->gestabon = $gestabon;

        return $this;
    }

    public function isGestsalarie(): ?bool
    {
        return $this->gestsalarie;
    }

    public function setGestsalarie(?bool $gestsalarie): self
    {
        $this->gestsalarie = $gestsalarie;

        return $this;
    }

    public function isGeststocks(): ?bool
    {
        return $this->geststocks;
    }

    public function setGeststocks(?bool $geststocks): self
    {
        $this->geststocks = $geststocks;

        return $this;
    }

    public function isGestmat(): ?bool
    {
        return $this->gestmat;
    }

    public function setGestmat(?bool $gestmat): self
    {
        $this->gestmat = $gestmat;

        return $this;
    }
}
