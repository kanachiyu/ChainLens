<?php
/**
 * Tests for ChainLens
 */

use PHPUnit\Framework\TestCase;
use Chainlens\Chainlens;

class ChainlensTest extends TestCase {
    private Chainlens $instance;

    protected function setUp(): void {
        $this->instance = new Chainlens(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainlens::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
