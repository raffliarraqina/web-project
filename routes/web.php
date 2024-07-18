<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleriesController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\UserController;

/*{{  }}
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|`
*/

Route::get('/', [App\Http\Controllers\FrontEndController::class, 'index'])->name('home');

Route::get('/about-us', [FrontEndController::class, 'about'])->name('about');
Route::get('/visi-misi', [FrontEndController::class, 'visiMisi'])->name('visiMisi');
Route::get('/news', [FrontEndController::class, 'indexNews'])->name('news');
Route::get('/gallery', [FrontEndController::class, 'gallery'])->name('galleries');
Route::get('/event', [FrontEndController::class, 'event'])->name('event');
Route::get('/detailNews/{slug}', [\App\Http\Controllers\FrontEndController::class, 'detailNews'])->name('detailNews');
Route::get('/detailEvent/{slug}', [\App\Http\Controllers\FrontEndController::class, 'detailEvent'])->name('detailEvent');

Auth::routes();

// Route::get('/', function (){
//     return view ('pages.admin.parent');
// });

Route::middleware(['auth'])->name('dashboard.')
    ->prefix('dashboard')->group(function () {

        Route::middleware(['admin'])->group(function () {
            //Route yang ada didalam middleware admin maka
            // yang bisa mengakses hanya admin
            Route::resource('/admin', UserController::class);
            Route::resource('/gallery', GalleriesController::class);
            Route::resource('/news', NewsController::class)->only([
                'index', 'show', 'edit', 'update', 'create', 'destroy', 'store'
            ]);
            Route::resource('/event', EventController::class)->only([
                'index', 'show', 'edit', 'update', 'create', 'destroy', 'store'
            ]);
        });
    });
