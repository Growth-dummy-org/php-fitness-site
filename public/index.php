<?php
// build variant 1

require __DIR__ . '/../src/FitnessRepository.php';

// reflected XSS: unescaped user input echoed back (intentional smell)
$q = $_GET['q'] ?? '';

echo "<h1>Fitness</h1>";
echo "<p>You searched for: " . $q . "</p>";
