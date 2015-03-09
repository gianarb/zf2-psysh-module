<?php
namespace Psysh\Service;

use Zend\ServiceManager\FactoryInterface;
use PsyshModule\Service\PsyshService;

class PsyshServiceFactory implements FactoryInterface
{
    public function createService($sl)
    {
        $isEnable = $sl->get("Config")['psysh']['enable'];
        return new PsyshService($isEnable);
    }
}
