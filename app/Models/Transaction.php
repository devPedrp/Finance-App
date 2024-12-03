<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    // Permitir atribuição em massa para os campos abaixo
    protected $fillable = [
        'description',
        'amount',
        'type',
        'category',
    ];    
}
