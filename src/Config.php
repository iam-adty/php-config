<?php namespace IamAdty;

class Config
{
    protected $name = '';
    protected $value = null;

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

    /**
     * @param string $name
     * @param mixed|null $value
     */
    public static function set()
    {
        $args = func_get_args();
        return new self($args[0] ?? "", $args[1] ?? null);
    }
}
