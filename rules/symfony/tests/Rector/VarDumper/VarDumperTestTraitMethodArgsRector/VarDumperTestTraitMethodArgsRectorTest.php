<?php

declare(strict_types=1);

namespace Rector\Symfony\Tests\Rector\VarDumper\VarDumperTestTraitMethodArgsRector;

use Iterator;
use Rector\Core\Testing\PHPUnit\AbstractRectorTestCase;
use Rector\Symfony\Rector\VarDumper\VarDumperTestTraitMethodArgsRector;

final class VarDumperTestTraitMethodArgsRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(string $file): void
    {
        $this->doTestFile($file);
    }

    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    protected function getRectorClass(): string
    {
        return VarDumperTestTraitMethodArgsRector::class;
    }
}
