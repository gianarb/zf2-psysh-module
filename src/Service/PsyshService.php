<?php
namespace PsyshModule\Service;

class PsyshService
{
    private $enable = false;

    public function __construct($enable)
    {
        $this->enable = $enable;
    }

    public function breakpoint()
    {
        if ($this->enable) {
            return \Psy\sh();
        }
        return null;
    }
}
