<?php
/**
 * Tests for BulbBeat
 */

use PHPUnit\Framework\TestCase;
use Bulbbeat\Bulbbeat;

class BulbbeatTest extends TestCase {
    private Bulbbeat $instance;

    protected function setUp(): void {
        $this->instance = new Bulbbeat(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Bulbbeat::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
