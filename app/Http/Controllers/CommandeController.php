<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Panier;
use App\Models\Produit;
use App\Models\User;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function index(){
        $users=User::all();
        $produits=Produit::all();
        $commandes=Commande::all();
        $paniers=Panier::all();
        return view('backend.admin.commande.commande', compact('users','produits','commandes','paniers'));
    }
    public function storecommande(Request $request, Commande $commande)
    {



            $data = [
                "id_user" => $request->id_user,
            ];

            $commande->create($data);
            return redirect()->back()->with("success", "le produit a été ajouter avec succès");
       
    }

    public function destroyproduitcoeur(Commande $coeur)
    {
        $coeur->delete();
        return redirect()->back()->with("error", "product deleted successfully");
    }
}
