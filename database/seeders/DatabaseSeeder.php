<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\Teaching\Periods\PeriodeSeeders;
use Database\Seeders\teaching\SubjectManagementSeeder;
use Database\Seeders\Teaching\Training\TrainingSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            SubjectManagementSeeder::class,
            PeriodeSeeders::class,
            SubjectManagementSeeder::class,
            TrainingSeeder::class,
        ]);
    }
}
