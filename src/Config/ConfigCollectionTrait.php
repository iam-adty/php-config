<?php namespace IamAdty\Config;

use IamAdty\Config;

trait ConfigCollectionTrait
{
    public function setConfig(Config $config)
    {
        if (property_exists($this, $config->getName())) {
            $this->{$config->getName()} = $config->getValue();
        }
    }
}
