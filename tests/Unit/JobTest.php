<?php

use App\Models\Job;
use App\Models\Tag;
use App\Models\Employer;

it('it belongs to employer', function () {
    // expect(true)->toBeTrue();
    //arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);
    
    //ACt
    expect($job->employer->is($employer))->toBeTrue();
});

it('can have tags', function () {
    $job = Job::factory()->create();
    $tag = Tag::factory()->create();

    $job->tags()->attach($tag);
    expect($job->tags)->toHaveCount(1);
});