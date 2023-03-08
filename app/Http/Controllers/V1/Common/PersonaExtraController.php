<?php

namespace App\Http\Controllers\V1\Common;

use App\Http\Controllers\Controller;
use App\Models\V1\Common\PersonaExtra;
use App\Http\Requests\V1\Common\StorePersonaExtraRequest;
use App\Http\Requests\V1\Common\UpdatePersonaExtraRequest;

class PersonaExtraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePersonaExtraRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PersonaExtra $personaExtra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersonaExtraRequest $request, PersonaExtra $personaExtra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PersonaExtra $personaExtra)
    {
        //
    }
}
