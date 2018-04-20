<?php

namespace Onestartup\Crm;

use Illuminate\Database\Eloquent\Model;

class Tracing extends Model
{
    protected $table = 'tracings';
    protected $fillable = [
    	'type',
		'detail',
		'interested_id',
		'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function interested()
    {
        return $this->belongsTo('App\Interested', 'interested_id');
    }
}
