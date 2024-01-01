<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Discipline;
use App\Models\Institution;
use Faker;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $courses = [
            [
                'name' => 'Web Development',
                'description' => $faker->paragraph,
                'institution_id' => 1,
                'price' => 130
            ],
            [
                'name' => 'Web UX/UI Design',
                'description' => $faker->paragraph,
                'institution_id' => 2,
                'price' => null
            ],
            [
                'name' => 'Wordpress Development',
                'description' => $faker->paragraph,
                'institution_id' => 3,
                'price' => 160
            ],
        ];

        foreach($courses as $id=>$courses)
        {
            $id++;
            $course = Course::create($courses);
            $course->addMediaFromUrl(url("img/course/course_$id.png"))->toMediaCollection('photo');
            $course->disciplines()->sync([$id]);
        }
    }
}
