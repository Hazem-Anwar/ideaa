<?php

use App\Models\idea;
use App\Models\Step;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

test('idea has a user', function () {

    $idea = idea::factory()->create();

    expect($idea->user)->toBeInstanceOf(User::class);

});

test('idea has steps', function () {

    $idea = idea::factory()->create();

    expect($idea->steps)->toBeEmpty();

    $idea->steps()->create([
        "description" => "Step 1",
    ]);

    expect($idea->fresh()->steps)->toHaveCount(1);

});


