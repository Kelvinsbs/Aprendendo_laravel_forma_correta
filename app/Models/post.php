<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'content', 'tags',
    ];

    protected $with = ['user']; // para nao precisar pegar todas as relacoes manuais nas controllers

    public function user() {
        return $this->belongsTo(User::class);
    }
}
