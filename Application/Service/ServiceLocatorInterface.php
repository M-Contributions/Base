<?php
declare(strict_types=1);

/**
 * Service Locator Interface
 * @category    Ticaje
 * @package     Ticaje_Base
 * @author      Hector Luis Barrientos <ticaje@filetea.me>
 */

namespace Ticaje\Base\Application\Service;

/**
 * Interface ServiceLocatorInterface
 * @package Ticaje\Base\Application\Service
 */
interface ServiceLocatorInterface
{
    /**
     * @param $class
     * @return mixed
     */
    public function get($class);

    /**
     * @param $class
     * @param array $arguments
     * @return mixed
     */
    public function create($class, array $arguments);
}
