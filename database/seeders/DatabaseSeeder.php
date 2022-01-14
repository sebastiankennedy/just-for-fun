<?php

namespace Database\Seeders;

use App\Models\AcademicYear;
use App\Models\School;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $school = School::factory()
            ->make()
            ->create(['name' => '轮椅飞行中学']);

        $academicYear = AcademicYear::factory()
            ->for($school)
            ->create(['name' => '2021-2022学年']);
    }
}
