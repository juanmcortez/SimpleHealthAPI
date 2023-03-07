<?php

namespace App\Models\V1\Common;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Phone extends Model
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
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'full_phone',
    ];


    /**
     * Protected method to retrieve the full phone number
     *
     * @return void
     */
    protected function fullPhone(): Attribute
    {
        $fullPhone = '';
        $fullPhone .= ($this->country_code != null) ? $this->country_code . ' ' : '';
        $fullPhone .= ($this->area_code != null) ? '(' . $this->area_code . ') ' : '';
        $fullPhone .= ($this->telephone_prefix != null && $this->line_number != null) ? $this->telephone_prefix . '-' . $this->line_number : '';

        return new Attribute(
            get: fn () => $fullPhone,
        );
    }
}
