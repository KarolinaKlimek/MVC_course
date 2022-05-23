<?php

namespace App\Models;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;

/** @Entity
 * @Table(name="books")
 */
class Books
{
    /**
     * @var int
     * @Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue()
     */
    protected int $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    protected string $name;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    protected string $description;

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }
}
