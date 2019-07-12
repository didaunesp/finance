<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
## TODO: MAYBE RENAME CLASS TO SPENT_TYPE
class Card extends Model 
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fk_user', 'name', 'last_4_digits',
    ];

}
