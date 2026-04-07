<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BasicTest extends TestCase
{
    use RefreshDatabase; // resets DB for every test

    /** @test */
    public function home_page_loads_correctly()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /** @test */
    public function pizzas_table_has_entries_after_migration()
    {
        // Run migrations automatically in test
        $this->artisan('migrate')->run();

        // Check database table
        $this->assertDatabaseHas('pizzas', [
            // assuming you have a pizza seeded, else remove this
        ]);
    }
}
