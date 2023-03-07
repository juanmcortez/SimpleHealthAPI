<?php

namespace App\Models\V1\Common;

use Carbon\Carbon;
use App\Enums\PersonaGender;
use App\Models\V1\Common\Address;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Persona extends Model
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
        'address_ID',
        'phone_ID',
        'cellphone_ID',
        'email_ID',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'gender'        => PersonaGender::class,
    ];


    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'age',
        'full_name',
    ];


    /**
     * Protected method to retrieve the persons age
     *
     * @return void
     */
    protected function age(): Attribute
    {
        return new Attribute(
            get: fn () => Carbon::parse($this->date_of_birth)->diff(Carbon::now())->format(config('app.format.age')),
        );
    }


    /**
     * Protected method to retrieve the persons full_name
     *
     * @return void
     */
    protected function fullName(): Attribute
    {
        return new Attribute(
            get: fn () => (!empty($this->middle_name)) ? $this->last_name . ', ' . $this->first_name . ' ' . $this->middle_name . '.' : $this->last_name . ', ' . $this->first_name,
        );
    }


    /* ************************* */
    /* ***** RELATIONSHIPS ***** */
    /* ************************* */

    /**
     * This is the relationship between Persona & Address models
     *
     * @return void
     */
    public function address()
    {
        return $this->hasOne(Address::class, 'id', 'address_ID')->withDefault();
    }


    /**
     * This is the relationship between Persona & Phone models
     *
     * @return void
     */
    public function phone()
    {
        return $this->hasOne(Phone::class, 'id', 'phone_ID')->withDefault();
    }


    /**
     * This is the relationship between Persona & Phone models
     *
     * @return void
     */
    public function cellphone()
    {
        return $this->hasOne(Phone::class, 'id', 'cellphone_ID')->withDefault();
    }


    /**
     * This is the relationship between Persona & Social models
     *
     * @return void
     */
    public function socials()
    {
        return $this->hasOne(Social::class, 'id', 'social_ID')->withDefault();
    }
}
