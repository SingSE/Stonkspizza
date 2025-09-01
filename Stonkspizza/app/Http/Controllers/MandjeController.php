<?php

namespace App\Http\Controllers;
use App\Models\pizzas;
use App\Models\ingredienten;
use App\Models\grootte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MandjeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groottes = grootte::all();
        $order = session('order', []);
        return view('mandje', ['groottes' => $groottes, 'order' => $order]);
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
        $groottes = Grootte::all();
        $pizzas = pizzas::all();
        
        foreach ($order as $item) {
            $itemId = $item->id;
        
            $selectedGrootte = $requestData['grootte_' . $itemId];
        
            $grootte = Grootte::find($selectedGrootte);
            $pizza = pizzas::find($itemId);

            $itemTotaalprijs = $pizza->prijs * $grootte->pricefactor;
        
            $item->grootte = $grootte;
            $item->totaalprijs = $itemTotaalprijs;
        }
        
        $totaalprijs = 0;
        foreach ($order as $item) {
            $totaalprijs += $item->totaalprijs;
        }
        
        return view('mandje', [
            'totaalprijs' => $totaalprijs,
            'order' => $order,
            'groottes' => $groottes
        ]);
        
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
    public function destroy(Request $request, string $pizza_id)
    {
        $order = session('order', []);

        $index = array_search($pizza_id, array_column($order, 'id'));

        if ($index !== false) {
            unset($order[$index]);
            session(['order' => array_values($order)]);
        }

        return redirect('mandje');
    }
}
