<?php
namespace PsyshModuleTest\Service;

use Zend\Test\PHPUnit\Controller\AbstractControllerTestCase;
use Zend\ServiceManager\ServiceManager;

class PsyshServiceFactoryTest extends AbstractControllerTestCase
{
    public function testFactoryReturnPsyshServiceInstance()
    {
        $sm = new ServiceManager();
        $sm->setService(
            'Config',
            array(
                'psysh' => array(
                    'enable' => true
                ),
            )
        );
        $sm->setFactory('psysh', 'PsyshModule\Service\PsyshServiceFactory');
        $this->assertInstanceOf('PsyshModule\Service\PsyshService', $sm->get("psysh"));
    }
}
