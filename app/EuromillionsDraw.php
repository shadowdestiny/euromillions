<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class EuromillionsDraw extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lottery_id',
        'draw_date',
        'result_regular_number_one',
        'result_regular_number_two',
        'result_regular_number_three',
        'result_regular_number_four',
        'result_regular_number_five',
        'result_lucky_number_one',
        'result_lucky_number_two',
        'jackpot_amount',
        'jackpot_currency_name',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'id',
    ];
}
