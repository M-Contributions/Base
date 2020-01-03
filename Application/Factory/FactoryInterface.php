<?php
declare(strict_types=1);

/**
 * Factory Pattern Interface
 * @category    Ticaje
 * @package     Ticaje_Base
 * @author      Hector Luis Barrientos <ticaje@filetea.me>
 */

namespace Ticaje\Base\Application\Factory;

/**
 * Interface FactoryInterface
 * @package Ticaje\Base\Application\Factory
 */
interface FactoryInterface
{
    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data = []);
}
