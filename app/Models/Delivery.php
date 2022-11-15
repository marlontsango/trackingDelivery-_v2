<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;
    protected $table = 'delivery';
    protected $primaryKey = 'id';
    protected $fillable = ['id','nom','prenom','telephone','email','ville','heure_depart','destination','heure_arrive','localisation','status','client_id'];


    public function user_delivery(){
        return $this->belongsTo(Clients::class,'client_id','id');
    }


}
