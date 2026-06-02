<?php

namespace App;

/** Auto-generated module 040 for Fitness. */
class Module040
{
    public string $tag = "fitness-040";

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
