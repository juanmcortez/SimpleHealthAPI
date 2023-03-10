<?php

namespace App\Http\Controllers\V1\Common;

use App\Models\V1\Common\Guarantor;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Common\StoreGuarantorRequest;
use App\Http\Requests\V1\Common\UpdateGuarantorRequest;

class GuarantorController extends Controller
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
    public function store(StoreGuarantorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Guarantor $guarantor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuarantorRequest $request, Guarantor $guarantor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guarantor $guarantor)
    {
        //
    }
}
