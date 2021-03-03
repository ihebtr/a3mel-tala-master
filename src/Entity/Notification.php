<?php

namespace App\Entity;

use App\Repository\NotificationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NotificationRepository::class)
 */
class Notification
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     *  @ORM\Column(type="text")
     */
    public $message ;
 /**
  *  @ORM\Column(type="datetime")
  */
   public $date ;
    public function getId(): ?int
    {
        return $this->id;
    }

}
