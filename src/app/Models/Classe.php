<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    protected $table = 'classes';
    protected $fillable = ['nome'];

    public function secoes () {
        return $this->hasMany(Secao::class, 'classe_id');
    }
}
