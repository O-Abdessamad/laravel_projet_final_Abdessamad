<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class sengleproduitController extends Controller
{
    public function index(Produit $produit){
        $allproduits=Produit::all();
        return view('frontend.singleproduit.singleproduit',compact('produit','allproduits'));
    }
}
