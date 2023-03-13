<?php

namespace App\Models\V1\Common;

use App\Models\V1\Common\Phone;
use App\Models\V1\Common\Address;
use App\Models\V1\Common\Persona;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employer extends Model
{
    use HasFactory, SoftDeletes;


    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
        'persona_ID',
        'company_address_ID',
        'company_phone_ID',
        'company_fax_ID',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    /* ************************* */
    /* ***** RELATIONSHIPS ***** */
    /* ************************* */


    /**
     * This is the relationship between Employer & Persona models
     *
     * @return void
     */
    public function persona()
    {
        return $this->hasOne(Persona::class, 'id', 'persona_ID')->withDefault();
    }


    /**
     * This is the relationship between Employer & Address models
     *
     * @return void
     */
    public function companyAddress()
    {
        return $this->hasOne(Address::class, 'id', 'company_address_ID')->withDefault();
    }


    /**
     * This is the relationship between Employer & Phone models
     *
     * @return void
     */
    public function companyPhone()
    {
        return $this->hasOne(Phone::class, 'id', 'company_phone_ID')->withDefault();
    }


    /**
     * This is the relationship between Employer & Phone models
     *
     * @return void
     */
    public function companyFax()
    {
        return $this->hasOne(Phone::class, 'id', 'company_fax_ID')->withDefault();
    }
}
