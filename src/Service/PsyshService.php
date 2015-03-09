<?php
namespace PsyshModule\Service;

class PsyshService
{
    private $enable = false;

    public function __construct($enable, $options)
    {
        $this->enable = $enable;
        $this->options = $options;
    }
}
