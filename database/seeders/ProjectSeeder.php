<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++) {

            $project = new Project();
            $project->title = $faker->sentence(4);
            $project->slug = Str::slug($project->title, '-');
            $project->content = $faker->text('300');
            $project->thumb = $faker->imageUrl(640, 480, 'animals', true);
            $project->save();
        }
    }
}
