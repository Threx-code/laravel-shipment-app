<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
	use Notifiable;
	
	protected $fillable = ['country_origin', 'country_destination', 'transportation_mode', 'kilo_weight', 'shipping_total'];

}
