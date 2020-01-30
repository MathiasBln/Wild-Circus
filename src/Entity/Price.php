<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PriceRepository")
 */
class Price
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="integer")
     */
    private $priceWeek;

    /**
     * @ORM\Column(type="integer")
     */
    private $priceWeekend;

    /**
     * @ORM\Column(type="integer")
     */
    private $priceHolidays;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getPriceWeek(): ?int
    {
        return $this->priceWeek;
    }

    public function setPriceWeek(int $priceWeek): self
    {
        $this->priceWeek = $priceWeek;

        return $this;
    }

    public function getPriceWeekend(): ?int
    {
        return $this->priceWeekend;
    }

    public function setPriceWeekend(int $priceWeekend): self
    {
        $this->priceWeekend = $priceWeekend;

        return $this;
    }

    public function getPriceHolidays(): ?int
    {
        return $this->priceHolidays;
    }

    public function setPriceHolidays(int $priceHolidays): self
    {
        $this->priceHolidays = $priceHolidays;

        return $this;
    }
}
