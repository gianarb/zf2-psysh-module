<?php
namespace PsyshModule\Service;

use Zend\ServiceManager\FactoryInterface;
use PsyshModule\Service\PsyshService;

class PsyshServiceFactory implements FactoryInterface
{
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $sl)
    {
        $isEnable = $sl->get("Config")['psysh']['enable'];
        return new PsyshService($isEnable);
    }
}
