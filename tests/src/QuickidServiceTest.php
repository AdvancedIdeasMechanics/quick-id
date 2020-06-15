<?php
namespace Advancedideasmechanics\Quickid;

use PHPUnit\Framework\TestCase;

class QuickidServiceTest extends Testcase {
    public function testGetId($id) {
        $this->assertIsInt($id);
    }
}