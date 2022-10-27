<?php

namespace menu\Model\Entity;
use menu\Model\Entity\AbstractEntity;

class Role extends AbstractEntity
{

    private string $role_name;

    /**
     * @return string
     */
    public function getRoleName(): string
    {
        return $this->role_name;
    }

    /**
     * @param string $role_name
     */
    public function setRoleName(string $role_name): self
    {
        $this->role_name = $role_name;
        return $this;
    }

}