<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Palpacao extends Model
{
    protected $fillable = [
        'date',  
        'ovario', 
        'tam_foliculo',
        'carac_foliculo',
        'cl_dias',
        'cl_tipo',
        'ut_edema',
        'ut_liquido',
        'ut_prenhez',
        'injetaveis',
        'inj_quantidade',
        'procedimento',
        'stallion',
        'client_id', 
        'animal_id'
    ];

    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'palpacoes';

    public function animal()
    {
        return $this->belongsTo(Animal::class, 'animal_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
