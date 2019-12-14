<?php
declare(strict_types=1);

namespace DeadCode;


use DeadCode\Analyzer\CodeUsages;

final class Analyzer
{
    /** @var CodeUsages */
    private $usages;

    public function __construct(CodeUsages $usages)
    {
        $this->usages = $usages;
    }

    public function recordUsage(string $usage): void
    {
        $this->usages->add($usage);
    }
}
