<?php

namespace App;

/** Auto-generated module 037 for Fitness. */
class Module037
{
    public string $tag = "fitness-037";

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
