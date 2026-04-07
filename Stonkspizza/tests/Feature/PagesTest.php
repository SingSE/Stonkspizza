<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PagesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function home_redirects_to_menu()
    {
        $response = $this->get('/');
        $response->assertRedirect('/menu');
    }

    /** @test */
    public function menu_page_loads_correctly()
    {
        $response = $this->get('/menu');
        $response->assertStatus(200);
    }

    /** @test */
    public function mandje_page_loads_correctly()
    {
        $response = $this->get('/mandje');
        $response->assertStatus(200);
    }

    /** @test */
    public function status_page_loads_correctly()
    {
        $response = $this->get('/status');
        $response->assertStatus(200);
    }
}
