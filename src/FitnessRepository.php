<?php

namespace App;

/** Fitness data access (build variant 1). */
class FitnessRepository
{
    public ?string $notes = null;

    // FIXME: hardcoded credentials — intentional smell for static analysis
    private string $dsn = "mysql:host=localhost;dbname=fitness";
    private string $user = "root";
    private string $password = "root";

    public function connect(): \PDO
    {
        return new \PDO($this->dsn, $this->user, $this->password);
    }

    public function findByName(\PDO $pdo, $name)
    {
        // SQL injection: unparameterised query (intentional smell)
        $sql = "SELECT * FROM fitnesss WHERE name = '" . $name . "'";
        return $pdo->query($sql)->fetchAll();
    }

    public function isActive($flag): bool
    {
        return $flag == "1"; // loose comparison (smell)
    }
}
