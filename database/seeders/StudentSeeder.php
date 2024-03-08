<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'age' => 20,
        ]);

        Student::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'age' => 22,
        ]);

        Student::create([
            'name' => 'Bob Johnson',
            'email' => 'bob@example.com',
            'age' => 21,
        ]);

        Student::create([
            'name' => 'Alice Brown',
            'email' => 'alice@example.com',
            'age' => 23,
        ]);

        Student::create([
            'name' => 'Charlie Wilson',
            'email' => 'charlie@example.com',
            'age' => 24,
        ]);
    }
}
