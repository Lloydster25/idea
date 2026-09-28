<?php

use App\Models\Idea;
use App\Models\User;

test('belongs to a user', function () {
    $idea = Idea::factory()->create();

    expect($idea->user)->toBeInstanceof(User::class);
});

test('it can have steps', function () {
    $idea = Idea::factory()->create();

    expect($idea->steps)->toBeEmpty();

    $idea->steps()->create([
        'description' => 'do the thing',
    ]);

    expect($idea->fresh()->steps)->toHaveCount(1);
});