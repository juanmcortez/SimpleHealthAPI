<?php

namespace App\Http\Controllers\V1\Common;

use App\Models\V1\Common\Employer;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Common\StoreEmployerRequest;
use App\Http\Requests\V1\Common\UpdateEmployerRequest;

class EmployerController extends Controller
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
    public function store(StoreEmployerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Employer $employer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployerRequest $request, Employer $employer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employer $employer)
    {
        //
    }
}
