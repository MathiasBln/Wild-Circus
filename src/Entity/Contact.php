<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Contact
{
    /**
     * @var string|null
     * @Assert\NotBlank(message="Veuillez remplir ce champ")
     * @Assert\Length(
     *     max=100
     *)
     */
    private $name;


    /**
     * @var string|null
     * @Assert\NotBlank(message="Veuillez remplir ce champ")
     */
    private $subject;

    /**
     * @var string|null
     * @Assert\NotBlank(message="Veuillez remplir ce champ")
     */
    private $message;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return Contact
     */
    public function setName(?string $name): Contact
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }

    /**
     * @param string|null $subject
     * @return Contact
     */
    public function setSubject(?string $subject): Contact
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string|null $message
     * @return Contact
     */
    public function setMessage(?string $message): Contact
    {
        $this->message = $message;
        return $this;
    }
}
