<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secao extends Model
{
    use HasFactory;
    protected $table = 'secoes';
    protected $fillable = ['nome', 'classe_id'];

    public function classe () {
        return $this->belongsTo(Classe::class, 'classe_id');
    }

    public function estudante () {
        return $this->hasMany(Estudante::class, 'secao_id');
    }
}
