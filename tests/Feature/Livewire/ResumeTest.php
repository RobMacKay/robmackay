<?php

use App\Livewire\Resume;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Resume::class)
        ->assertStatus(200);
});
