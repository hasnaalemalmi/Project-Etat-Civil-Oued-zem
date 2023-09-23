<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Naissances extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'nomDeNe',
        'dateNaissance',
        'nomDePere',
        'nomDeMere',
        'adresse',
        'sexe',
        'orderDeNaissance',
        'dateEnrgistrement'
    ];
}