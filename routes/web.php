<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ComController;
use App\Http\Controllers\Admin\ProfController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AnnoController;

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

Route::get('/',[HomeController::class,'index'])->name('home');

Route::redirect('/anasayfa', '/home');

// Main Sites

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/anno', [HomeController::class, 'anno'])->name('anno');
Route::get('/msg', [HomeController::class, 'msg'])->name('msg');
Route::post('/sendmsg', [HomeController::class, 'sendmsg'])->name('sendmsg');
Route::post('/sendcmt', [HomeController::class, 'sendcmt'])->name('sendcmt');


Route::middleware('auth')->group(function () {
    Route::middleware('admin')->group(function () {
        Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'admin'])->name('admin');
        Route::prefix('admin/messages')->group(function () {
            Route::get('/',[\App\Http\Controllers\Admin\MessageController::class,'index'])->name('admin_messages');
            Route::get('edit/{id}', [App\Http\Controllers\Admin\MessageController::class, 'edit'])->name('admin_message_edit');
            Route::post('update/{id}', [App\Http\Controllers\Admin\MessageController::class, 'update'])->name('admin_message_update');
            Route::get('delete/{id}', [App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('admin_message_delete');
        });
        Route::prefix('admin/user')->group(function (){
            Route::get('/',[UserController::class,'index'])->name('admin_users');
            Route::get('create',[UserController::class,'create'])->name('admin_user_add');
            Route::post('store',[UserController::class,'store'])->name('admin_users_store');
            Route::get('edit/{id}',[UserController::class,'edit'])->name('admin_users_edit');
            Route::post('update/{id}',[UserController::class,'update'])->name('admin_users_update');
            Route::get('delete/{id}',[UserController::class,'destroy'])->name('admin_users_delete');
            Route::get('show/{id}',[UserController::class,'show'])->name('admin_users_show');
            Route::get('userrole/{id}',[UserController::class,'user_roles'])->name('admin_user_roles');
            Route::post('userrolestore/{id}',[UserController::class,'user_role_store'])->name('admin_user_role_add');
            Route::get('userroledelete/{userid}/{roleid}',[UserController::class,'user_role_delete'])->name('admin_user_role_delete');
        });
        Route::prefix('admin/anno')->group(function (){
            Route::get('/',[AnnoController::class,'index'])->name('admin_annos');
            Route::get('create',[AnnoController::class,'create'])->name('admin_anno_add');
            Route::post('store',[AnnoController::class,'store'])->name('admin_anno_store');
            Route::get('edit/{id}',[AnnoController::class,'edit'])->name('admin_anno_edit');
            Route::post('update/{id}',[AnnoController::class,'update'])->name('admin_anno_update');
            Route::get('delete/{id}',[AnnoController::class,'destroy'])->name('admin_anno_delete');
            Route::get('show/{id}',[AnnoController::class,'show'])->name('admin_anno_show');
        });
        Route::prefix('admin/blog')->group(function (){
            Route::get('/',[BlogController::class,'index'])->name('admin_blogs');
            Route::get('create',[BlogController::class,'create'])->name('admin_blog_add');
            Route::post('store',[BlogController::class,'store'])->name('admin_blog_store');
            Route::get('edit/{id}',[BlogController::class,'edit'])->name('admin_blog_edit');
            Route::post('update/{id}',[BlogController::class,'update'])->name('admin_blog_update');
            Route::get('delete/{id}',[BlogController::class,'destroy'])->name('admin_blog_delete');
            Route::get('show/{id}',[BlogController::class,'show'])->name('admin_blog_show');
        });
        Route::prefix('admin/comment')->group(function (){
            Route::get('/',[ComController::class,'index'])->name('admin_comments');
            Route::post('store',[ComController::class,'store'])->name('admin_comment_store');
            Route::get('edit/{id}',[ComController::class,'edit'])->name('admin_comment_edit');
            Route::post('update/{id}',[ComController::class,'update'])->name('admin_comment_update');
            Route::get('delete/{id}',[ComController::class,'destroy'])->name('admin_comment_delete');
            Route::get('show/{id}',[ComController::class,'show'])->name('admin_comment  _show');
        });
    });
});

Route::prefix('user')->middleware('auth')->group(function () {
    Route::get('/', [ProfController::class, 'index'])->name('user_profile');
    Route::get('edit/{id}', [ProfController::class, 'edit'])->name('user_profile_edit');
    Route::post('update/{id}', [ProfController::class, 'update'])->name('user_profile_update');
    Route::get('delete/{id}',[ProfController::class,'destroy'])->name('user_profile_delete');
});


Route::get('/admin/login', [App\Http\Controllers\Admin\HomeController::class, 'loginform'])->name('login');
Route::post('/admin/logincheck', [App\Http\Controllers\Admin\HomeController::class, 'logincheck'])->name('login.action');
Route::post('/admin/logout', [App\Http\Controllers\Admin\HomeController::class, 'logout'])->name('admin_logout');
Route::post('/logout', [App\Http\Controllers\Admin\HomeController::class, 'userlogout'])->name('user_logout');


// Message




// Register

Route::get('/register', [App\Http\Controllers\Admin\HomeController::class, 'registrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Admin\HomeController::class, 'register'])->name('register.action');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

