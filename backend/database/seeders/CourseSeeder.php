<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lecturer;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::factory()->count(50)->create()->each(fn(Course $course) =>
        $course->lecturers()->sync(Lecturer::inRandomOrder()->take(2)->pluck('id')->toArray())
        );
    }
}
