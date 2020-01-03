<?php
declare(strict_types=1);

/**
 * Service Locator Class
 * @category    Ticaje
 * @package     Ticaje_Base
 * @author      Hector Luis Barrientos <ticaje@filetea.me>
 */

namespace Ticaje\Base\Application\Service;

use Magento\Framework\ObjectManagerInterface as MagentoObjectManagerInterface;

/**
 * Class ServiceLocator
 * @package Ticaje\Base\Application\Service
 * This class kind of performs gateway pattern design in order to provide consistency to our Model Domain
 * According to DI principle it complies to separate the Model Domain from the current framework.
 * We're gonna play Magento rules since this is a Gateway, so our Domain does not get touched by Magento's
 */
class ServiceLocator implements ServiceLocatorInterface
{
    protected $objectManager;

    /**
     * ServiceLocator constructor.
     * @param MagentoObjectManagerInterface $objectManager
     * Using composition over inheritance of course
     */
    public function __construct(
        MagentoObjectManagerInterface $objectManager
    ) {
        $this->objectManager = $objectManager;
    }

    /**
     * @param $class
     * @return mixed
     */
    public function get($class)
    {
        return $this->objectManager->get($class);
    }

    public function create($class, array $arguments = [])
    {
        return $this->objectManager->create($class, $arguments);
    }
}
