<?php

use App\Models\User;

it('creates a bookmark', function () {
    $this->actingAs($user = User::factory()->create());
    $user->bookmarks()->create([
        'type' =>  'youtube',
        'name' =>  'youtube',
        'url' =>  'https://example.com',
    ]);
    visit('/bookmarks')->assertSee('youtube');
});
