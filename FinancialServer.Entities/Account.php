<?php
/**
 * Created by PhpStorm.
 * User: Odine
 * Date: 23/11/2015
 * Time: 20:34
 */

class Account {

    private $name;
    private $bank;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * @param mixed $bank
     */
    public function setBank($bank)
    {
        $this->bank = $bank;
    }
}