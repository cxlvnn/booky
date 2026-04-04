<?php

use App\Models\User;

it('registers a user', function () {
    $page = visit('/register')
        ->fill('name', 'baba')
        ->fill('email', 'baba@gmail.com')
        ->fill('password', 'password123')
        ->press('@register-button')
        ->assertPathIs('/bookmarks');

    expect(User::count())->toBe(1);
    $this->assertAuthenticated();
    $page->debug();
});
