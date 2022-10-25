<?php
namespace menu\Model\Entity;

use menu\Model\Entity\AbstractEntity;
use menu\Model\Entity\Role;

class User extends AbstractEntity
{
    private string $name;
    private role $role_id;
}