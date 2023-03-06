<?php

namespace App\Models\V1\Patients;

use App\Models\V1\Common\Persona;
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
        'created_at',
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
