<?php

namespace App\Http\Controllers;

use App\Models\bestellingen;
use App\Models\bestellingenitems;
use App\Models\pizzas;
use App\Models\grootte;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BestelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $pizza_id = $request->input('pizza_id');
        $pizza = pizzas::find($pizza_id);

        $order = session('order', []);
        $order[] = $pizza;
        session(['order' => $order]);

        return back();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        $order = session('order', []);
        $min = 1;
        $max = 10;
        $orderId = rand($min, $max);

        Bestellingen::create([
            'id' => $orderId
        ]);

        foreach ($order as $item) {
            $itemId = $item->id;

            $selectedGrootte = $requestData['grootte_' . $itemId];

            $grootte = Grootte::find($selectedGrootte);
            $pizza = Pizzas::find($itemId);

            BestellingenItems::create([
                'pizza_id' => $pizza->id,
                'grootte_id' => $grootte->id,
                'order_id' => $orderId,
            ]);
        }

        return redirect()->route('status.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
