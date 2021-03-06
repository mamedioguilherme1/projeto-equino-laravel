<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Animal extends Model
{
    protected $fillable = [
        'name', 
        'breed', 
        'age', 
        'register', 
        'coat', 
        'annotations', 
        'client_id',
        'user_id'
    ];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'animals';

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function palpacoes()
    {
        return $this->hasMany(Palpacao::class, 'animal_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
