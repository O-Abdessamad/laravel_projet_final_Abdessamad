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
        'categorie_id', // Ajoutez cette colonne pour stocker la catégorie du produit


    ];

    // Définir les relations ici (par exemple, la relation avec la catégorie et le panier)
    public function categorie()
    {
        return $this->hasMany(Categorie::class);
    }

    public function panier()
    {
        return $this->hasMany(Panier::class);
    }
}
