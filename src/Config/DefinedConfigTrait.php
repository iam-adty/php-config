<?php namespace IamAdty\Config;

trait DefinedConfigTrait
{
    public function __construct()
    {
        parent::__construct($this->name, $this->value);
    }
}
