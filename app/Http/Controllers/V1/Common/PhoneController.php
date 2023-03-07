<?php

namespace App\Http\Controllers\V1\Common;

use App\Models\V1\Common\Phone;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Common\StorePhoneRequest;
use App\Http\Requests\V1\Common\UpdatePhoneRequest;

class PhoneController extends Controller
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
    public function store(StorePhoneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Phone $phone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePhoneRequest $request, Phone $phone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Phone $phone)
    {
        //
    }
}
