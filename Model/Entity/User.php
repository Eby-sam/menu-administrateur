<?php
namespace menu\Model\Entity;

use menu\Model\Entity\AbstractEntity;
use menu\Model\Entity\Role;

class User extends AbstractEntity
{
    private string $name;
    private

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
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }



}