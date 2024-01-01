<?php

namespace Database\Seeders;

use App\Models\Institution;
use App\Models\User;
use Faker;
use Illuminate\Database\Seeder;

class InstitutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach(range(1,3) as $id)
        {
            $institution = Institution::create(['name' => $faker->unique()->company, 'description' => $faker->paragraph]);
            $institution->addMediaFromUrl(url("img/institutions/institution_$id.png"))->toMediaCollection('logo');
        }
        User::find(2)->update(['institution_id' => 1]);
    }
}
