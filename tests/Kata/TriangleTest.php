<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\Triangle;

class TriangleTest extends TestCase
{
    /**
     * @var \Kata\Triangle
     */
    private $index;

    protected function setUp(): void
    {
        $this->index = new Triangle();
    }

    public function testShallPass(): void
    {
        $this->assertEquals(1, 1);
    }

    public function testHandleReturnTrue(): void
    {
        $this->assertEquals(true, $this->index->handle());
    }
}
