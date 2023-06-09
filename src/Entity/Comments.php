<?php

/**
 * This work, including the code samples, is licensed under a Creative Commons BY-SA 3.0 license.
 */

namespace App\Entity;

use App\Repository\CommentsRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * @ORM\Entity(repositoryClass=CommentsRepository::class)
 */
class Comments
{
    use TimestampableEntity;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $nick;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $text;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Photos", inversedBy="comments")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="photos_id", referencedColumnName="id")
     * })
     */
    private ?Photos $photos;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email Email
     *
     * @return $this
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNick(): ?string
    {
        return $this->nick;
    }

    /**
     * @param string $nick Nick
     *
     * @return $this
     */
    public function setNick(string $nick): self
    {
        $this->nick = $nick;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param string $text Text
     *
     * @return $this
     */
    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return Photos|null
     */
    public function getPhotos(): ?Photos
    {
        return $this->photos;
    }

    /**
     * @param Photos|null $photos Photos
     *
     * @return $this
     */
    public function setPhotos(?Photos $photos): self
    {
        $this->photos = $photos;

        return $this;
    }
}
