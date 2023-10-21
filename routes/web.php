<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\SousCategorieController;
use App\Http\Controllers\Admin\ProduitController;
use App\Http\Controllers\Admin\ImageProduitController;
use App\Http\Controllers\Admin\CarouselController;
use App\Http\Controllers\Admin\BestSellerController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\ProposController;
use App\Http\Controllers\Admin\CommandeController;
use App\Http\Controllers\frontEnd\ContactController;
use App\Http\Controllers\frontEnd\FrontendController;

 
use Illuminate\Support\Facades\Artisan;

Route::get('/clear-optimization', function () {
    Artisan::call('optimize:clear');
    return 'Optimization cache cleared.';
});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [FrontendController::class, 'index']); 
Route::get('/produit/{id}', [FrontendController::class, 'getProduct']); 
Route::get('/details-produit/{id}', [FrontendController::class, 'getDetailsProduct']); 
Route::get('/propos', [FrontendController::class, 'propos']); 
Route::post('search-produit', [ProduitController::class, 'searchProduct']); 
Route::post('panier', [ProduitController::class, 'PanierProduct']); 
Route::post('confirmer_commande', [ProduitController::class, 'ConfirmePanier']); 
Route::get('/page-contact', [ContactController::class, 'indexfront']); 
Route::post('contact', [ContactController::class, 'store']); 

Route::get('/details-seller/{id}', [FrontendController::class, 'getDetailsSeller']); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth','isAdmin'])->group(function() {
    
    Route::get('logout', [LoginController::class, 'logout']);

    Route::get('categories', [CategorieController::class, 'index']); 
    Route::get('create-categorie', [CategorieController::class, 'create']); 
    Route::post('add-categorie', [CategorieController::class, 'store']); 
    Route::get('edit-categorie/{id}', [CategorieController::class, 'edit']); 
    Route::put('update-categorie/{id}', [CategorieController::class, 'update']); 
    Route::get('delete-categorie/{id}', [CategorieController::class, 'destroy']); 
   
    Route::get('sous-categories', [SousCategorieController::class, 'index']); 
    Route::get('create-sous-categorie', [SousCategorieController::class, 'create']); 
    Route::post('add-sous-categorie', [SousCategorieController::class, 'store']); 
    Route::get('edit-sous-categorie/{id}', [SousCategorieController::class, 'edit']); 
    Route::put('update-sous-categorie/{id}', [SousCategorieController::class, 'update']); 
    Route::get('delete-sous-categorie/{id}', [SousCategorieController::class, 'destroy']); 
    
    Route::get('/produits', [ProduitController::class, 'index']); 
    Route::get('create-produits', [ProduitController::class, 'create']); 
    Route::post('add-produits', [ProduitController::class, 'store']); 
    Route::get('edit-produits/{id}', [ProduitController::class, 'edit']); 
    Route::put('update-produits/{id}', [ProduitController::class, 'update']); 
    Route::get('delete-produits/{id}', [ProduitController::class, 'destroy']);
    Route::get('delete-image/{id}', [ProduitController::class, 'destroyImage']);

    Route::get('/carousel', [CarouselController::class, 'index']); 
    Route::get('create-carousel', [CarouselController::class, 'create']); 
    Route::post('add-carousel', [CarouselController::class, 'store']); 
    Route::get('edit-carousel/{id}', [CarouselController::class, 'edit']); 
    Route::put('update-carousel/{id}', [CarouselController::class, 'update']); 
    Route::get('delete-carousel/{id}', [CarouselController::class, 'destroy']);

    Route::get('/bestseller', [BestSellerController::class, 'index']); 
    Route::get('create-bestseller', [BestSellerController::class, 'create']); 
    Route::post('add-bestseller', [BestSellerController::class, 'store']); 
    Route::get('edit-bestseller/{id}', [BestSellerController::class, 'edit']); 
    Route::put('update-bestseller/{id}', [BestSellerController::class, 'update']); 
    Route::get('delete-bestseller/{id}', [BestSellerController::class, 'destroy']);

    Route::get('/information', [InformationController::class, 'index']); 
    Route::get('create-information', [InformationController::class, 'create']); 
    Route::post('add-information', [InformationController::class, 'store']); 
    Route::get('edit-information/{id}', [InformationController::class, 'edit']); 
    Route::put('update-information/{id}', [InformationController::class, 'update']); 
    Route::get('delete-information/{id}', [InformationController::class, 'destroy']);

    Route::get('/contact-admin', [ContactController::class, 'index']); 
    Route::get('/delete-contact-admin/{id}', [ContactController::class, 'destroy']); 

    Route::get('/propos-admin', [ProposController::class, 'index']); 
    Route::get('create-propos-admin', [ProposController::class, 'create']); 
    Route::post('add-propos-admin', [ProposController::class, 'store']); 
    Route::get('edit-propos-admin/{id}', [ProposController::class, 'edit']); 
    Route::put('update-propos-admin/{id}', [ProposController::class, 'update']); 
    Route::get('delete-propos-admin/{id}', [ProposController::class, 'destroy']);

    Route::get('/dashboard', [CommandeController::class, 'index']);   
    Route::get('edit-commandes/{id}', [CommandeController::class, 'edit']); 
    Route::put('update-commande/{id}', [CommandeController::class, 'update']); 
    Route::get('delete-commande/{id}', [CommandeController::class, 'destroy']);
    
    Route::post('confirmation-commande/{id}', [CommandeController::class, 'confirmation']);

   
});