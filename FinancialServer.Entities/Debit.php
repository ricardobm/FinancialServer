<?php
/**
 * Created by PhpStorm.
 * User: Odine
 * Date: 23/11/2015
 * Time: 20:35
 */

class Debit {

    private $name;
    private $location;
    private $description;
    private $value;
    private $currency;
    private $debitCategory;

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
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return mixed
     */
    public function getDebitCategory()
    {
        return $this->debitCategory;
    }
    /**
     * @param mixed $debitCategory
     */
    public function setDebitCategory($debitCategory)
    {
        $this->debitCategory = $debitCategory;
    }
}