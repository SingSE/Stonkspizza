<?php

namespace App\Http\Controllers;

use App\Models\bestellingen;
use App\Models\status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $status = bestellingen::first();

        $statusId = $status->status_id;

        return view('status', ['statusid' => $statusId]);
    }


    public function cancel()
    {

        $status = bestellingen::first();
        $statusId = $status->status_id;
        $status->update(['status_id' => 6]);


        return redirect('/status')->with(['statusid' => $statusId]);
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
        //
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
