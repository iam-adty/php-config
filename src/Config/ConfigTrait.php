<?php namespace IamAdty\Config;

trait ConfigTrait
{
    public function __construct($value = null)
    {
        parent::__construct($this->name, $value);
    }

    public function set($value = null)
    {
        $this->value = $value;
    }
}
