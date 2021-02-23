<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    protected $fillable = 
    [
	'trans_id',
	'ref_code',
	'amount',
	'date',
	'currency',
	'channel',
	'auth_code',
	'card_type',
	'bank',
	'card_brand',
	'cus_id',
	'email',
	'customer_code',
	];

}
