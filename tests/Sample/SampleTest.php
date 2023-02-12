<?php

namespace Sample;

use PHPProjectTempalte\Sample\Sample;
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testConstructor(): void
    {
        $sample = new Sample();
        self::assertInstanceOf(Sample::class, $sample);
    }
}
