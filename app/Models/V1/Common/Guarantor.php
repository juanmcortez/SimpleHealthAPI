<?php

namespace App\Models\V1\Common;

use App\Models\V1\Common\Persona;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guarantor extends Model
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
}
