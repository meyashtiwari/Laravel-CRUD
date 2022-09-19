<?php

namespace Database\Seeders;

use Carbon\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Candidate;

class CandidatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('candidates')->insert([
        //     'fname' => 'Yash',
        //     'lname' => 'Tiwari',
        //     'user_id' => '123',
        //     'status' => 'Employee'
        // ]);

        // DB::table('candidates')->insert();
        Candidate::factory(10)->create();
    }
}
