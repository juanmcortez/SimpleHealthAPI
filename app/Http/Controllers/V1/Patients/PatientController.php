<?php

namespace App\Http\Controllers\V1\Patients;

use App\Models\V1\Common\Persona;
use App\Models\V1\Patients\Patient;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\Patients\PatientResource;
use App\Http\Requests\V1\Patients\StorePatientRequest;
use App\Http\Requests\V1\Patients\UpdatePatientRequest;
use App\Http\Resources\V1\Patients\PatientListResource;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PatientListResource::collection(
            Persona::with([
                'patient',
                'patient.personaExtra',
                'address',
                'phone',
                'cellphone',
                'socials',
            ])
                ->orderBy('last_name')
                ->orderBy('first_name')
                ->orderBy('middle_name')
                ->paginate()
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePatientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        return new PatientResource(
            $patient->load(
                [
                    'persona.address',
                    'persona.phone',
                    'persona.cellphone',
                    'persona.socials',
                    'personaExtra',
                ]
            )
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePatientRequest $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
