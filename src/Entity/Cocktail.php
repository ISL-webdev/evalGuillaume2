<?php

namespace App\Entity;

use App\Repository\CocktailRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CocktailRepository::class)
 */
class Cocktail
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $origine;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image_url;

    /**
     * @ORM\ManyToMany(targetEntity=Ingredients::class, inversedBy="cocktails")
     */
    private $cocktails_ingredients;

    public function __construct()
    {
        $this->cocktails_ingredients = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(?int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getOrigine(): ?string
    {
        return $this->origine;
    }

    public function setOrigine(?string $origine): self
    {
        $this->origine = $origine;

        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->image_url;
    }

    public function setImageUrl(string $image_url): self
    {
        $this->image_url = $image_url;

        return $this;
    }

    /**
     * @return Collection|Ingredients[]
     */
    public function getCocktailsIngredients(): Collection
    {
        return $this->cocktails_ingredients;
    }

    public function addCocktailsIngredient(Ingredients $cocktailsIngredient): self
    {
        if (!$this->cocktails_ingredients->contains($cocktailsIngredient)) {
            $this->cocktails_ingredients[] = $cocktailsIngredient;
        }

        return $this;
    }

    public function removeCocktailsIngredient(Ingredients $cocktailsIngredient): self
    {
        if ($this->cocktails_ingredients->contains($cocktailsIngredient)) {
            $this->cocktails_ingredients->removeElement($cocktailsIngredient);
        }

        return $this;
    }
}
