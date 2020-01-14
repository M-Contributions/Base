<?php
declare(strict_types=1);

/**
 * Base Trait
 * @category    Ticaje
 * @package     Ticaje_Base
 * @author      Hector Luis Barrientos <ticaje@filetea.me>
 */

namespace Ticaje\Base\Traits;

/**
 * Trait Getter
 * @package Ticaje\Base\Traits
 */
trait Getter
{
    /**
     * @param $name
     * @return null
     * Redefine magic set method so object using an instance of this one can access properties very simple
     */
    public function __get($name)
    {
        if (method_exists($this, $name)) {
            return $this->$name();
        } elseif (property_exists($this, $name)) {
            return $this->$name;
        }
        return null;
    }
}
