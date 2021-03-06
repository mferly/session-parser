<?php
declare(strict_types=1);

namespace SessionParser;

use PHPUnit\Framework\TestCase;

final class SessionParserTest extends TestCase
{
    public function testSessionDirectoryExists(): void
    {
        $this->assertDirectoryExists(__DIR__);
    }

    public function testSessionDirectoryIsReadable(): void
    {
        $this->assertDirectoryIsReadable(__DIR__);
    }

    public function testMethodInitReturnsInt(): void
    {
        $this->assertIsInt(SessionParser::init());
    }

    public function testMethodDirectoryIteratorReturnsInt(): void
    {
        $this->assertIsInt(SessionParser::directoryIterator());
    }

    public function testMethodFileParserReturnsBool(): void
    {
        $this->assertIsBool(SessionParser::fileParser());
    }

    public function testMethodGetIteratorReturnsIterable(): void
    {
        $this->assertIsIterable(SessionParser::getIterator());
    }
}
