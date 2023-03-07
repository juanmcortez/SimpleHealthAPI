<?php

namespace App\Http\Controllers\V1\Common;

use App\Models\V1\Common\Social;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Common\StoreSocialRequest;
use App\Http\Requests\V1\Common\UpdateSocialRequest;

class SocialController extends Controller
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
    public function store(StoreSocialRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Social $social)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSocialRequest $request, Social $social)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Social $social)
    {
        //
    }
}
