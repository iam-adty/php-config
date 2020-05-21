<?php namespace IamAdty\Config;

trait ConfigTrait
{
    public function __construct($value = null)
    {
        parent::__construct($this->name, $value);
    }

    /**
     * @param mixed|null $value
     */
    public static function set()
    {
        $args = func_get_args();
        return new self($args[0] ?? null);
    }
}
