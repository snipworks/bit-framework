<?php

/**
 * Class User
 */
class User extends Snipworks\BitCore\Model
{
    protected $name = 'snipworks';

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
