<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        $tags = Tag::factory()->count(3)->create();

        Job::factory()
            ->count(20)
            ->state(new Sequence(
                [
                    'featured' => false,
                    'schedule' => 'full-time',
                ],
                [
                    'featured' => true,
                    'schedule' => 'part-time',
                ]
            ))
            ->create()
            ->each(function ($job) use ($tags) {
                $job->tags()->attach($tags->random(2));
            });
    }
}