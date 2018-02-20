<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable = [
        'nome', 'uf', 'ibge',
    ];

    protected $guarded = [
        'id'
    ];

    public function cidades()
    {
        return $this->hasMany(Cidade::class);
    }
}
