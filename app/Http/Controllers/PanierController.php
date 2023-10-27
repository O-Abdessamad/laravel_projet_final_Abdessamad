<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use App\Models\Produit;
use App\Models\User;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function index()
    {
        $produits=Produit::all();
        
        return view('frontend.panier.panier' , compact('produits'));
    }
    public function storepanier(Request $request, Panier $panier, Produit $produit)
    {
        $checkproduit = Panier::where("id_produit", $produit->id)->where("id_user", $request->id_user)->first();



        if (!$checkproduit) {
            $data = [
                "id_user" => $request->id_user,
                "id_produit" => $produit->id,
                "quantiter" => $produit->id,
            ];

            $panier->create($data);
            return redirect()->back()->with("success", "le produit a été ajouter avec succès");
        } else {
            return redirect()->back()->with("success", "le produit a été ajouter avec succès");
        }
    }

    public function addToPanier(Request $request ,Produit $produit )
    {
        $produit->stock -= 1;
        $produit->save();
        $id_user = $request->id_user;

        $panierExist = Panier::where('id_produit', $produit->id)->where('id_user', $id_user)->first();

        if ($panierExist) {
            $panierExist->quantiter += 1;
            $panierExist->save();
        } else {
            Panier::create([
                'id_produit' => $produit->id,
                'id_user' => $id_user,
                'quantiter' => 1,
            ]);
        }

        return redirect()->back()->with('success', 'Produit ajouté au panier avec succès.');
    }
}
