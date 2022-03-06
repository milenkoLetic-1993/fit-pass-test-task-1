<?php

namespace Database\Seeders;

use App\Models\SportFacility;
use Illuminate\Database\Seeder;

class SportFacilitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SportFacility::factory()->times(10)->create();
    }
}
