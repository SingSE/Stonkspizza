<?php

namespace App\Http\Controllers;
use App\Models\medewerkers;
use Illuminate\Http\Request;

class MedewerkersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medewerkers = medewerkers::all();
        return view('manager/medewerkers', ['medewerkers' => $medewerkers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('medewerkers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $m = new medewerkers;
        $voornaam = $request->voornaam;
        $achternaam = $request->achternaam;
        $adres = $request->addres;
        $telefoonnummer = $request->telefoonnummer;
        $stad = $request->stad;
        $BSN = $request->BSN;

        $m->voornaam = $voornaam;
        $m->achternaam = $achternaam;
        $m->adres = $adres;
        $m->telefoonnummer = $telefoonnummer;
        $m->stad = $stad;
        $m->burger_service_nummer = $BSN;
        $m->save();
        
        return redirect('medewerkers');
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
        $medewerker = medewerkers::find($id);
        return view('medewerkers.edit', compact( 'medewerker' ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $m = medewerkers::find($id);
        $voornaam = $request->voornaam;
        $achternaam = $request->achternaam;
        $adres = $request->adres;
        $telefoonnummer = $request->telefoonnummer;
        $stad = $request->stad;
        $BSN = $request->burger_service_nummer;

        $m->voornaam = $voornaam;
        $m->achternaam = $achternaam;
        $m->adres = $adres;
        $m->telefoonnummer = $telefoonnummer;
        $m->stad = $stad;
        $m->burger_service_nummer = $BSN;
        $m->save();

        return redirect('medewerkers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $medewerker = medewerkers::find($id);
        $medewerker->delete();

        return redirect('medewerkers');
    }
}
