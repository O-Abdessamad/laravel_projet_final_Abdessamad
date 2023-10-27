<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Coeur;
use App\Models\Produit;
use Illuminate\Http\Request;

class CategorierController extends Controller
{
    public function index(){
        $categoriers= Categorie::all();
        $produits =Produit::all();
        $coeurs=Coeur::all();


        return view('frontend.shop.shop' , compact('categoriers' , 'produits','coeurs'));
    }

    public function bois(){
        $categoriers= Categorie::all();
        $produits =Produit::all();

        return view('frontend.categorier.bois' , compact('categoriers' , 'produits'));
    }
    
    public function fer(){
        $categoriers= Categorie::all();
        $produits =Produit::all();

        return view('frontend.categorier.fer' , compact('categoriers' , 'produits'));
    }
    
    public function plastique(){
        $categoriers= Categorie::all();
        $produits =Produit::all();

        return view('frontend.categorier.plastique' , compact('categoriers' , 'produits'));
    }

}
