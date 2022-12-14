<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Bridge\Doctrine\MongoDbOdm\Filter\OrderFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use App\Repository\GenreRepository;
use Doctrine\ORM\Mapping as ORM;
#[ApiResource(
    collectionOperations:['get','post'],
    itemOperations:['get','delete','put'],
    attributes:['pagination_enabled' => false]
)]
#[ApiFilter(SearchFilter::class, properties:[
    'name' => SearchFilter::STRATEGY_PARTIAL
])]

#[ApiFilter(OrderFilter::class, properties:
['name'], arguments : ['orderParameterName' => 'order'])]
#[ORM\Entity(repositoryClass: GenreRepository::class)]
class Genre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
