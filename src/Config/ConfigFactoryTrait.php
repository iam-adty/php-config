<?php namespace IamAdty\Config;

trait ConfigFactoryTrait
{
    private static function create($name = '', $value = null)
    {
        return new self($name, $value);
    }
}
