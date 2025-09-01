<?php

namespace App\Http\Controllers;
use App\Models\pizzas;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pizzas = pizzas::all();
        return view('manager/pizza', ['pizzas' => $pizzas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('pizza.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $p = new pizzas;
        $name = $request->name;
        $beschrijving = $request->beschrijving;
        $prijs = $request->prijs;

        $p->name = $name;
        $p->beschrijving = $beschrijving;
        $p->prijs = $prijs;

        $p->save();
        
        return redirect('pizza');
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
        $pizza = pizzas::find($id);
        return view('pizza.edit', compact( 'pizza' ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $p = pizzas::find($id);
        $name = $request->name;
        $beschrijving = $request->beschrijving;
        $prijs = $request->prijs;

        $p->beschrijving = $beschrijving;
        $p->name = $name;
        $p->prijs = $prijs;

        $p->save();

        return redirect('pizza');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pizza = pizzas::find($id);
        $pizza->delete();

        return redirect('pizza');
    }
}
