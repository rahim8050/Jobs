<?php

namespace Database\Seeders;

use App\Models\Jobs;
use App\Models\Profile as ModelsProfile;
use App\Models\User;
use App\Models\Work;
use Database\Factories\WorkFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Contracts\Queue\Job;
use Pest\Plugins\Profile;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(10)->create();
         Work::Factory(10)->create();
    // Removed invalid factory call for Profile
    // Profile::factory(10)->create();

        //  Jobs::factory(10)->create();
        ModelsProfile::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
