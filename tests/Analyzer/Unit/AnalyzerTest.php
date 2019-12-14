<?php
declare(strict_types=1);

namespace DeadCode\Tests\Analyzer\Unit;


use DeadCode\Analyzer;
use DeadCode\Tests\Analyzer\TestDoubles\SpyCodeUsages;
use PHPUnit\Framework\TestCase;

final class AnalyzerTest extends TestCase
{
    /** @var SpyCodeUsages */
    private $usages;
    /** @var Analyzer */
    private $analyzer;

    protected function setUp(): void
    {
        $this->usages = new SpyCodeUsages();
        $this->analyzer = new Analyzer;
    }

    public function testItRecordsUsage(): void
    {
        // Given
        $usage = 'hello';

        // When
        $this->analyzer->recordUsage($usage);

        // Then
        self::assertTrue($this->usages->wasAdded($usage), 'Usage should be recorded');
    }
}
