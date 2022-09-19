<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use PHPUnit\Framework\MockObject\Builder\Stub;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CandidatesTableSeeder::class);
        $this->call(StudentTableSeeder::class);
    }
}
