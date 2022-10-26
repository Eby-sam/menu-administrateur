<?php

namespace menu\Model\Manager;

use menu\Model\Entity\Role;
use DataBase;
use menu\Model\Entity\User;

class UserManager {

    public const TABLE = "user";

    /**
     * @return array
     */
    public static function getAllUser(): array
    {
        $users = [];
        $result = DataBase::DataConnect()->query("SELECT * FROM " . self::TABLE);

        if ($result) {
            foreach ($result->fetchAll() as $data) {
                $users[] = self::makeUser($data);
            }
        }
        return $users;
    }

    private static function makeUser($data)
    {
        $user = (new User())
            ->setId($data['id'])
            ->setName($data['user']);



        return $user->setRoleId(RoleManager::getRoleByUser($user));
    }
}