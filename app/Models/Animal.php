<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'name', 
        'breed', 
        'age', 
        'register', 
        'coat', 
        'annotations', 
        'client_id'
    ];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'animals';

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
