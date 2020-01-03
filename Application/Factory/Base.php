<?php
declare(strict_types=1);

/**
 * Factory Pattern Base Class
 * @category    Ticaje
 * @package     Ticaje_Base
 * @author      Hector Luis Barrientos <ticaje@filetea.me>
 */

namespace Ticaje\Base\Application\Factory;

use Ticaje\Base\Application\Service\ServiceLocatorInterface;

/**
 * Class Base
 * @package Ticaje\Base\Application\Factory
 */
abstract class Base implements FactoryInterface
{
    protected $serviceLocator;

    protected $instanceName;

    /**
     * Base constructor.
     * @param ServiceLocatorInterface $serviceLocator
     * @param string $instanceName
     */
    public function __construct(
        ServiceLocatorInterface $serviceLocator,
        string $instanceName
    ) {
        $this->serviceLocator = $serviceLocator;
        $this->instanceName = $instanceName;
    }

    /**
     * @inheritDoc
     */
    public function create(array $data = [])
    {
        return $this->serviceLocator->create($this->instanceName, $data);
    }
}
