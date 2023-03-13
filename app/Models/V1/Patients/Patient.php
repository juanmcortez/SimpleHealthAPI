<?php

namespace App\Models\V1\Patients;

use App\Models\V1\Common\Persona;
use App\Models\V1\Common\Employer;
use App\Models\V1\Common\Guarantor;
use App\Models\V1\Common\PersonaExtra;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory, SoftDeletes;


    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'pid';


    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'pid',
        'updated_at',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'persona_ID',
        'persona_extra_ID',
        'guarantor_ID',
        'employer_ID',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    /* ************************* */
    /* ***** RELATIONSHIPS ***** */
    /* ************************* */

    /**
     * This is the relationship between Patient & Persona models
     *
     * @return void
     */
    public function persona()
    {
        return $this->hasOne(Persona::class, 'id', 'persona_ID')->withDefault();
    }


    /**
     * This is the relationship between Patient & PersonaExtra models
     *
     * @return void
     */
    public function personaExtra()
    {
        return $this->hasOne(PersonaExtra::class, 'id', 'persona_extra_ID')->withDefault();
    }


    /**
     * This is the relationship between Patient & Guarantor models
     *
     * @return void
     */
    public function guarantor()
    {
        return $this->hasOne(Guarantor::class, 'id', 'guarantor_ID')->withDefault();
    }


    /**
     * This is the relationship between Patient & Employer models
     *
     * @return void
     */
    public function employer()
    {
        return $this->hasOne(Employer::class, 'id', 'employer_ID')->withDefault();
    }
}
