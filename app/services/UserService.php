<?php

/**
 * Class UserService
 */
class UserService
{
    /**
     * @return string
     */
    public static function getUserName()
    {
        $user = new User();

        return $user->getName();
    }
}
