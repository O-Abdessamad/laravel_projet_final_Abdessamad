<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre', 
        'prix',
        'image',
        'createur', 
        'stock',
        'categorie', 


    ];

    

    public function panier()
    {
        return $this->hasMany(Panier::class);
    }

    public function coeur()
    {
        return $this->hasMany(Coeur::class);
    }
}
