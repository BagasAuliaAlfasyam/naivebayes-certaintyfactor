<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DiseaseController;
use App\Http\Controllers\Admin\RuleController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\SymptomController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\PostController as AdminPost;
use App\Http\Controllers\Admin\SettingsController as SettingsAdmin;


use App\Http\Controllers\Users\ConsultationController;
use App\Http\Controllers\Users\DashboardController as UserDashboard;
use App\Http\Controllers\Users\DiagnosisController;
use App\Http\Controllers\Users\SettingsController as SettingsUser;


use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\CommentController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::redirect('/', '/login');

Auth::routes();

Route::group(
    [
        'as' => 'admin.',
        'prefix' => 'admin',
        //'namespace' => 'Admin',
        'middleware' => ['auth', 'admin']
    ],
    function () {
        Route::get('dashboard', [AdminDashboard::class, 'index'])->name('dashboard');
        Route::resource('symptoms', SymptomController::class);
        Route::resource('diseases', DiseaseController::class);
        Route::resource('posts', AdminPost::class);
        Route::resource('rules', RuleController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('tags', TagController::class);

        Route::get('/profile', [SettingsAdmin::class, 'profile']);
        Route::patch('/profile/update', [SettingsAdmin::class, 'profileUpdate']);
        Route::get('/password', [SettingsAdmin::class, 'password'])->name('backend.password');
        Route::patch('/updatePassword', [SettingsAdmin::class, 'updatePassword'])->name('backend.updatePassword');
    }
);


Route::group(
    [
        'as' => 'users.',
        'prefix' => 'users',
        //'namespace' => 'Users',
        'middleware' => ['auth', 'users']
    ],
    function () {
        Route::get('dashboard', [UserDashboard::class, 'index'])->name('dashboard');

        Route::get('/profile', [SettingsUser::class, 'profile']);
        Route::patch('/profile/update', [SettingsUser::class, 'profileUpdate']);
        Route::get('/password', [SettingsUser::class, 'password'])->name('users.password');
        Route::patch('/updatePassword', [SettingsUser::class, 'updatePassword'])->name('users.updatePassword');

        Route::get('/diagnosis', [DiagnosisController::class, 'index'])->name('users.diagnosis');
        Route::post('/diagnosis/proccess', [DiagnosisController::class, 'proccess'])->name('diagnosis.proccess');
        Route::get('/diagnosis/results', [DiagnosisController::class, 'results'])->name('diagnosis.results');

        Route::get('/consultations', [ConsultationController::class, 'usersConsultations'])->name('consultations');
        Route::get('/consultations/{consultations:id}', [ConsultationController::class, 'usersConsultationsDetail'])->name('consultations.detail');
    }
);

// Route::group(
//     ['namespace' => 'Front'],
//     function () {
//         Route::get('/', [HomeController::class ,'index'])->name('home');
//         Route::get('/blog', [PostController::class, 'index'])->name('blogs.index');
//         Route::get('/blog/{post:slug}', [PostController::class, 'show'])->name('blogs.show');
//         Route::get('about', [AboutController::class, 'index'])->name('about');
//         Route::get('/category/{slug}', [PostController::class, 'postsByCategory']);
//         Route::get('/tag/{slug}', [PostController::class, 'postsByTag']);
//         Route::post('/blog/comments/{post}', [CommentController::class, 'store']);
//         Route::get('/search', [PostController::class, 'blogSearch'])->name('blog.search');
//     }
// );
