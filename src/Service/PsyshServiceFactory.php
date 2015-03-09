<?php
namespace PsyshModule\Service;

use Zend\ServiceManager\FactoryInterface;
use PsyshModule\Service\PsyshService;

class PsyshServiceFactory implements FactoryInterface
{
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $sl)
    {
        $config = $sl->get("Config");
        $isEnable = $config['psysh']['enable'];

        return new PsyshService($isEnable);
    }
}
