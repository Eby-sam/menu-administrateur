<?php

namespace menu\Model\Manager;

use DataBase;
use menu\Model\Entity\Role;
use menu\Model\Entity\User;

class RoleManager
{
    public const TABLE = "role";


    /**
     * @param User $user
     * @return void|null
     */
    public static function getRoleByUser(User $user): self
    {
        $roles = null;
        $query = DataBase::DataConnect()->query("
            SELECT * FROM TABLE WHERE id IN (SELECT role_id FROM user WHERE id = {$user->getId()})");
        if($query){
            foreach($query->fetchAll() as $roleData) {
                $roles = (new Role())
                    ->setId($roleData['id'])
                    ->setRoleName($roleData['role_name']);
            }
        }
        return $roles;
    }
}