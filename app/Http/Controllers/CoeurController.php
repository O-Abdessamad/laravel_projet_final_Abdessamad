<?php

namespace App\Http\Controllers;

use App\Models\Coeur;
use App\Models\Produit;
use App\Models\User;
use Illuminate\Http\Request;

class CoeurController extends Controller
{
    public function index()
    {
        $coeurs = Coeur::all();
        $produits = Produit::all();


        return view('frontend.coeur.coeur', compact('coeurs', 'produits'));
    }

    public function storecoeur(Request $request, Coeur $coeur, Produit $produit)
    {
        $checkproduit = Coeur::where("id_produit", $produit->id)->where("id_user", $request->id_user)->first();



        if (!$checkproduit) {
            $data = [
                "id_user" => $request->id_user,
                "id_produit" => $produit->id,
            ];

            $coeur->create($data);
            return redirect()->back()->with("success", "le produit a été ajouter avec succès");
        } else {
            return redirect()->back()->with("success", "le produit a été ajouter avec succès");
        }
    }

    public function destroyproduitcoeur(Coeur $coeur)
    {
        $coeur->delete();
        return redirect()->back()->with("error", "product deleted successfully");
    }
}
