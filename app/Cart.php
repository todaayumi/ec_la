<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use SoftDeletes;

    protected $fillable = ['stuck_id','title', 'price',];

    
    public function stuck_id(){
        return $this->belongsTo('App\Stuck');
    }

    public function title(){
        return $this->belongsTo('App\Stuck');
    }

    public function price(){
        return $this->belongsTo('App\Stuck');
    }
    
}
 