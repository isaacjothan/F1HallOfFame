<?php

use App\Models\Championship;
use App\Models\Driver;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;
use Tests\TestCase;

uses(TestCase::class, LazilyRefreshDatabase::class);

it('shows database-backed champions on the homepage', function () {
    $driver = Driver::factory()->create([
        'name' => 'Lewis Hamilton',
        'slug' => 'lewis-hamilton',
        'nationality' => 'Británico',
    ]);

    Championship::factory()->for($driver)->create(['season' => 2020]);

    $this->get(route('home'))
        ->assertOk()
        ->assertSee('Campeones que hicieron historia')
        ->assertSee('Lewis Hamilton')
        ->assertSee('2020');
});

it('filters the archive by driver name and decade', function () {
    $senna = Driver::factory()->create([
        'name' => 'Ayrton Senna',
        'slug' => 'ayrton-senna',
        'nationality' => 'Brasileño',
    ]);
    $lauda = Driver::factory()->create([
        'name' => 'Niki Lauda',
        'slug' => 'niki-lauda',
        'nationality' => 'Austriaco',
    ]);

    Championship::factory()->for($senna)->create(['season' => 1991]);
    Championship::factory()->for($lauda)->create(['season' => 1977]);

    $this->get(route('champions.index', ['q' => 'Senna', 'decade' => 1990]))
        ->assertOk()
        ->assertSee('Ayrton Senna')
        ->assertDontSee('Niki Lauda');
});

it('filters the archive by nationality', function () {
    $driver = Driver::factory()->create([
        'name' => 'Max Verstappen',
        'slug' => 'max-verstappen',
        'nationality' => 'Neerlandés',
    ]);

    Championship::factory()->for($driver)->create(['season' => 2024]);

    $this->get(route('champions.index', ['nationality' => 'Neerlandés']))
        ->assertOk()
        ->assertSee('Max Verstappen');
});

it('shows a driver profile with all championship seasons', function () {
    $driver = Driver::factory()->create([
        'name' => 'Ayrton Senna',
        'slug' => 'ayrton-senna',
        'nationality' => 'Brasileño',
    ]);

    Championship::factory()->for($driver)->create(['season' => 1991]);
    Championship::factory()->for($driver)->create(['season' => 1988]);

    $this->get(route('champions.show', $driver))
        ->assertOk()
        ->assertSee('2 títulos mundiales')
        ->assertSee('1991')
        ->assertSee('1988');
});
