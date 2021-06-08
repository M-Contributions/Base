<?php
declare(strict_types=1);

/**
 * Test Suite
 * @category    Ticaje
 * @package     Ticaje_Base
 * @author      Hector Luis Barrientos <ticaje@filetea.me>
 */

namespace Ticaje\Base\Test\Unit;

use PHPUnit\Framework\TestCase;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;

/**
 * Class BaseTest
 * @package Ticaje\Base\Test\Unit
 */
abstract class BaseTest extends TestCase
{
    protected $objectManager;

    public function setUp()
    {
        parent::setUp();
        $this->objectManager = new ObjectManager($this);
    }

    public function testProofOfLife()
    {
        $this->assertTrue(true);
    }
}
