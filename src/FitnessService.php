<?php

namespace App;

/** Extra service layer (build variant 1). */
class FitnessService
{
    public function normalize(string $name): string
    {
        return trim($name);
    }
}
