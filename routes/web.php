<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\VisitController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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

Route::get('language/{lang}', function ($lang) {
    Session::put('locale', $lang);
    return redirect()->back();
})->middleware('language');

Route::get('/', [MainController::class, 'home'])->name('mukundpur.home')->middleware('language');
Route::get('/construction', [MainController::class, 'construction'])->name('mukundpur.construction')->middleware('language');

Route::prefix('home')->group(function () {
    Route::get('/contact-us', [MainController::class, 'contact'])->name('mukundpur.contact')->middleware('language');
    Route::get('/gallery', [GalleryController::class, 'gallery'])->name('mukundpur.gallery')->middleware('language');
});

Route::prefix('about')->group(function () {
    Route::get('/director-desk', [AboutController::class, 'director'])->name('mukundpur.director')->middleware('language');
    Route::get('/about-zoo', [AboutController::class, 'about'])->name('mukundpur.about')->middleware('language');
    Route::get('/vision', [AboutController::class, 'vision'])->name('mukundpur.vision')->middleware('language');
    Route::get('/heritage', [AboutController::class, 'heritage'])->name('mukundpur.heritage')->middleware('language');
    Route::get('/foundation', [AboutController::class, 'foundation'])->name('mukundpur.foundation')->middleware('language');
});

Route::prefix('visit')->group(function () {
    Route::get('/timings', [VisitController::class, 'timings'])->name('mukundpur.timings')->middleware('language');
    Route::get('/visitors', [VisitController::class, 'visitors'])->name('mukundpur.visitors')->middleware('language');
    Route::get('/ticket', [VisitController::class, 'ticket'])->name('mukundpur.ticket')->middleware('language');
    Route::get('/special-attraction', [VisitController::class, 'specialAttraction'])->name('mukundpur.special-attraction')->middleware('language');
    Route::get('/dos', [VisitController::class, 'dos'])->name('mukundpur.dos')->middleware('language');
});

Route::prefix('management')->group(function () {
    Route::get('/chart', [ManagementController::class, 'chart'])->name('mukundpur.chart')->middleware('language');
    Route::get('/human', [ManagementController::class, 'human'])->name('mukundpur.human')->middleware('language');
    Route::get('/rescue', [ManagementController::class, 'rescue'])->name('mukundpur.rescue')->middleware('language');
});

Route::prefix('animals')->group(function () {
    Route::get('/mammals', [AnimalController::class, 'mammals'])->name('mukundpur.mammals')->middleware('language');
    Route::get('/reptiles', [AnimalController::class, 'reptiles'])->name('mukunpur.reptiles')->middleware('language');
    Route::get('/birds', [AnimalController::class, 'birds'])->name('mukundpur.birds')->middleware('language');
    Route::get('/arrivals-borns', [AnimalController::class, 'arrivalsBorns'])->name('mukundpur.arrivals-borns')->middleware('language');
    Route::get('/enrichment', [AnimalController::class, 'enrichment'])->name('mukundpur.enrichment')->middleware('language');
    Route::get('/ranging', [AnimalController::class, 'ranging'])->name('mukundpur.ranging')->middleware('language');
    Route::get('/adoption', [AnimalController::class, 'adoption'])->name('mukundpur.adoption')->middleware('language');
});

Route::prefix('news')->group(function () {
    Route::get('/events-happenings', [NewsController::class, 'eventsHappenings'])->name('mukundpur.events-happenings')->middleware('language');
    Route::get('/education-programs', [NewsController::class, 'educationPrograms'])->name('mukundpur.education')->middleware('language');
    Route::get('/newses', [NewsController::class, 'newses'])->name('mukundpur.newses')->middleware('language');
    Route::get('/news-details/{slug}', [NewsController::class, 'news_details'])->name('mukundpur.news-details')->middleware('language');
    Route::get('/events', [NewsController::class, 'events'])->name('mukundpur.events');
    Route::get('/event-details/{slug}', [NewsController::class, 'event_details'])->name('mukundpur.event-details')->middleware('language');
    Route::get('/training-programs', [NewsController::class, 'trainingPrograms'])->name('mukundpur.training-programs')->middleware('language');
});

Auth::routes();

Route::group(['prefix' => 'superadmin', 'middleware' => ['auth', 'isSuperadmin', 'prevent-back-history']], function () {
    // For Super Admin Dashboard
    Route::get('/dashboard', [SuperAdminController::class, 'index'])->name('dashboard')->middleware('language');
    Route::get('/role-edit/{id}', [SuperAdminController::class, 'editUserRole'])->name('editUserRole')->middleware('language');
    Route::put('/role-update/{id}', [SuperAdminController::class, 'updateUserRole'])->name('updateUserRole')->middleware('language');
    Route::delete('/role-delete/{id}', [SuperAdminController::class, 'deleteUserRole'])->name('deleteUserRole')->middleware('language');
    Route::get('/changeuserstatus', [SuperAdminController::class, 'changeUserStatus'])->name('changeUserStatus')->middleware('language');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isAdmin', 'prevent-back-history']], function () {
    // For Newses Routes
    Route::get('/news', [NewsController::class, 'newsShow'])->name('news_show')->middleware('language');
    Route::post('/news-create', [NewsController::class, 'newsCreate'])->name('news_create')->middleware('language');
    Route::get('/news-edit/{id}', [NewsController::class, 'newsEdit'])->name('news_edit')->middleware('language');
    Route::post('/news-update/{id}', [NewsController::class, 'newsUpdate'])->name('news_update')->middleware('language');
    Route::delete('/news-del/{id}', [NewsController::class, 'newsDelete'])->name('news_delete')->middleware('language');

    // For Events Routes
    Route::get('/event', [NewsController::class, 'eventShow'])->name('event_show')->middleware('language');
    Route::post('/event-create', [NewsController::class, 'eventCreate'])->name('event_create')->middleware('language');
    Route::get('/event-edit/{id}', [NewsController::class, 'eventEdit'])->name('event_edit')->middleware('language');
    Route::put('/event-update/{id}', [NewsController::class, 'eventUpdate'])->name('event_update')->middleware('language');
    Route::delete('/event-delete/{id}', [NewsController::class, 'eventDelete'])->name('event_delete')->middleware('language');

    // For Gallery Routes
    Route::get('images', [GalleryController::class, 'create'])->name('images');
    Route::post('images-save', [GalleryController::class, 'store'])->name('images-save');
    Route::delete('images-delete/{id}', [GalleryController::class, 'destroy'])->name('images-delete');
    Route::get('images-show', [GalleryController::class, 'index'])->name('images-show');
});
