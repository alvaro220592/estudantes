<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudante extends Model
{
    use HasFactory;
    protected $table = 'estudantes';
    protected $fillable = ['nome', 'email', 'secao_id'];

    public function secao () {
        return $this->belongsTo(Secao::class, 'secao_id');
    }
}
