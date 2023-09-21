<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    // Définir les relations ici (par exemple, la relation avec les produits)
    public function produits()
    {
        return $this->hasMany(Produit::class);
    }
}
