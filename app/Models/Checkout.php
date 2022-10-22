<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checkout extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['user_id', 'camp_id', 'card_number', 'expired', 'cvc', 'is_paid'];

    //format value expired to month
    public function setExpiredAtribut($value)
    {
        dd('ok');
        $this->attributes['expired'] = date('Y-m-t', strtotime($value));
    }
}
