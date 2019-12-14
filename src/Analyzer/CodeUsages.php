<?php
declare(strict_types=1);

namespace DeadCode\Analyzer;


interface CodeUsages
{
    public function add(string $usage): void;
}
