<?php

use App\Http\Controllers\CategorierController;
use App\Http\Controllers\CoeurController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProduitWCntoller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleeController;
use App\Http\Controllers\sengleproduitController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get("/", [HomeController::class, "index"])->name('frontend.home');

Route::get("/contact", [InfoController::class, "contact"])->name('contact');

Route::get('/show/{produit}',[sengleproduitController::class,"index"])->name('sengleproduit.index');

Route::get('/shop',[CategorierController::class,"index"])->name("shop.index");

Route::get('/shop/categorier/bois',[CategorierController::class,"bois"])->name("shop.bois");
Route::get('/shop/categorier/fer',[CategorierController::class,"fer"])->name("shop.fer");
Route::get('/shop/categorier/plastique',[CategorierController::class,"plastique"]);





Route::get('/coeur',[CoeurController::class,"index"])->name("coeur.index");

Route::middleware('auth')->group(function () {
    // coeur
    Route::post("/storecoeur/{produit}", [CoeurController::class, "storecoeur"])->name('storecoeur'); 
    Route::delete("/coeur/{coeur}/delete", [CoeurController::class, "destroyproduitcoeur"])->name('coeur.destroyproduitcoeur');
    // panier
    Route::get('/panier',[PanierController::class,"index"])->name("panier.index");
    Route::post("/addToPanier/{produit}", [PanierController::class, "addToPanier"])->name('addToPanier'); 
    // commande
    Route::post("/storecommande", [CommandeController::class, "storecommande"])->name('storecommande'); 


});

Route::get('/allproduitWM', function () {
    return view('backend.allproduitWM');
})->middleware(['auth', 'role:webmaster'])->name('backend.allproduitWM');


Route::middleware('auth', 'role:webmaster')->group(function () {
    // page webmaster Produit
    Route::get("/allproduitWM", [ProduitWCntoller::class, "index"])->name('backend.allproduitWM');
    Route::delete("/backend/produit/{produit}/webmaster/delete", [ProduitWCntoller::class, "destroyproduit"])->name('backendW.destroyproduit');
    Route::put("/backend/produit/{produit}/webmaster", [ProduitWCntoller::class, "updateproduit"])->name('backendW.updateproduit');

    Route::post("/backend/produit/store/webmaster", [ProduitWCntoller::class, "storproduit"])->name('backendW.storproduit');
});

Route::middleware('auth', 'role:admin')->group(function () {
    // page admin User
    Route::get("/alluser", [RoleeController::class, "index"])->name('backend.alluser');

    Route::delete("/backend/{user}", [RoleeController::class, "destroyuser"])->name('backend.destroyuser');
    Route::put("/backend/{user}", [RoleeController::class, "updateuser"])->name('backend.updateuser');

    // page admin produit
    Route::get("/allproduit", [ProduitController::class, "index"])->name('backend.allproduit');

    Route::delete("/backend/produit/{produit}", [ProduitController::class, "destroyproduit"])->name('backend.destroyproduit');
    Route::put("/backend/produit/{produit}", [ProduitController::class, "updateproduit"])->name('backend.updateproduit');
    Route::post("/backend/produit/store", [ProduitController::class, "storproduit"])->name('backend.storproduit');

    // email
    
    Route::get("/boitemail", [ProduitController::class, "boitemail"])->name('backend.boitemail');
    Route::put("boitemail/{message}", [ProduitController::class, "updatmessage"])->name('backend.updatmessage');
    // Route::post("/sendmail", [ProduitController::class, "sendmail"])->name('sendmail');


    // contact
    Route::post("/storemessage", [ProduitController::class, "storemessage"])->name('storemessage');

    // infoo
    Route::get("/info", [InfoController::class, "index"])->name('backend.info');

    Route::put("/boitemail/{info}/info", [ProduitController::class, "updateinfo"])->name('backend.updateinfo');

    // commande
    Route::get("/commande", [CommandeController::class, "index"])->name('backend.commande');


});

Route::middleware('auth')->group(function () {
    // send email    
    Route::post("/sendmail", [ProduitController::class, "sendmail"])->name('sendmail');
});






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
