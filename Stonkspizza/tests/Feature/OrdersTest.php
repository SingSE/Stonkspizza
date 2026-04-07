<?php

namespace Tests\Feature;

use App\Models\Bestellingen;
use App\Models\BestellingenItems;
use App\Models\Pizzas;
use App\Models\Grootte;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OrdersTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_add_pizza_to_order_session()
    {
        $pizza = Pizzas::factory()->create();

        $response = $this->get('/bestel?pizza_id=' . $pizza->id);

        $response->assertRedirect();
        $this->assertCount(1, session('order'));
        $this->assertEquals($pizza->id, session('order')[0]->id);
    }

    /** @test */
    public function can_store_order_and_items()
    {
        $pizza = Pizzas::factory()->create();
        $grootte = Grootte::factory()->create();

        // simulate adding to session
        session(['order' => [$pizza]]);

        $response = $this->post('/bestel', [
            'grootte_' . $pizza->id => $grootte->id
        ]);

        $response->assertRedirect(route('status.index'));

        // Check orders table
        $this->assertDatabaseCount('bestellingen', 1);
        $this->assertDatabaseCount('bestellingenitems', 1);

        $this->assertDatabaseHas('bestellingenitems', [
            'pizza_id' => $pizza->id,
            'grootte_id' => $grootte->id
        ]);
    }
}
