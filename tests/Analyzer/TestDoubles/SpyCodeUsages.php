<?php
declare(strict_types=1);

namespace DeadCode\Tests\Analyzer\TestDoubles;


use DeadCode\Analyzer\CodeUsages;

final class SpyCodeUsages implements CodeUsages
{
    /** @var string[] */
    private $usages = [];

    public function add(string $usage): void
    {
        $this->usages[] = $usage;
    }

    public function wasAdded(string $usage): bool
    {
        foreach ($this->usages as $existingUsage) {
            if ($usage === $existingUsage) {
                return true;
            }
        }

        return false;
    }
}
