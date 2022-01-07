<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\afficheController;

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
// route par defaut du programme
// Route::get('/', function () {
    
//     return view('welcome');


//route vers une vue qui affiche bonjour
// });
// Route::get('/bonjour', function(){
//     return view('premier');
// });

//ici je donne la possibilite au controlleur d'affiche la vue
Route::get('/', [afficheController::class,'index'])->name('welcome');
Route::get('/posts/create', [afficheController::class,'create'])->name('create');
Route::get('/posts/{id}', [afficheController::class,'show'])->name('post.show');
Route::get('/contactez-nous', [afficheController::class,'contact'])->name('contact');
 