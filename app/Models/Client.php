<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Client extends Model
{
    protected $fillable = ['name', 'address', 'cellphone', 'cpf', 'email','user_id'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'clients';


    public function animals()
    {
        return $this->hasMany(Animal::class, 'client_id');
    }

    public function palpacoes()
    {
        return $this->hasMany(Palpacao::class, 'client_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

