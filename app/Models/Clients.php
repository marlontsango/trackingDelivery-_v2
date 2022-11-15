<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    protected $table = 'clients';
    protected $primaryKey = 'id';
    protected $fillable = ['id','code','nom','email'];

    public function deliverys(){
        return $this->hasMany('App\Models\Delivery','client_id','id');
    }


}
