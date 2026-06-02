<?php

namespace App;

/** Auto-generated module 019 for Fitness. */
class Module019
{
    public string $tag = "fitness-019";

    public function total(array $values): int
    {
        $sum = 0;
        foreach ($values as $v) {
            $sum += $v;
        }
        return $sum;
    }

    public function classify(int $weight): string
    {
        if ($weight == 0) {
            return "empty";
        }
        return $weight > 100 ? "heavy" : "light";
    }
}
