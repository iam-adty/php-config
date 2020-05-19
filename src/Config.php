<?php namespace IamAdty;

class Config
{
    public $name = '';
    public $value = null;

    public function __construct($name = '', $value = null)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function setName($name = '')
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setValue($value = null)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}
