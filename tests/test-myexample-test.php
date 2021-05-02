<?php

use PHPUnit\Framework\TestCase;

final class SampleTest extends TestCase
{
    public function test_something(): void
    {
        // Optional: Test anything here, if you want.
        $this->assertTrue(true, 'This should already work.');

        // Stop here and mark this test as incomplete.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}
