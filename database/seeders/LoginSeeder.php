<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\blogs;
class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds
     */
    public function run(): void
    {
        blogs::factory()->count(1)->create();
    }
}
