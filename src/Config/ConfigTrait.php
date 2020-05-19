<?php namespace IamAdty\Config;

trait ConfigTrait
{
    public function __construct($value = null)
    {
        parent::__construct($this->name, $value);
    }
}
