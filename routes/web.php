<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\posts;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\CategoryController;
use App\Models\Post;

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

// Route::get('/', [HomeController::class, 'show']);

// Route::get('/about', function(){
//     return view('pages.about');
// });

// Route::get('/notfound', function(){
    
//     echo '<div>
//     <h1>Hello woi</h1>
//     <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla officia vitae, ullam ex corporis quibusdam in dolores. Id quia quasi architecto iste sequi ad, aperiam, animi molestiae labore veritatis rem ratione quis sint deleniti. Non quisquam amet corporis vero veritatis.</p>
//     </div>';

//     echo '<button>Klik Here</button>';
// });

// Route::get('/mahasiswa/{nama}', function($nama){
//     return "Tampilan data mahasiswa bernama $nama";
// });

Route::get('/mahasiswa', function(){
    return view('pages.mahasiswa', [
        "nama" => "charles",
        "umur" => 5
    ]);
});

// Route::redirect('/mahasiswa/{nama}', '/mahasiswa');

// Route::prefix('/admin')->group(function(){
//     Route::get('/mahasiswa/{nama}/{umur}', function($nama, $umur){
//         return view('pages.mahasiswa', ['nama' => $nama, 'umur' => $umur]);
//     });
//     Route::get('/about', function(){
//         return view('pages.about');
//     });
// });




// Route::get('/', function(){
//     return view('pages.dashboard', ["title" => 'Home']);
// });

Route::get('/', function () {
    return view('pages.home', [
        'title' => 'Home',
        'active' => 'home'
    ]);
})->name('home');

Route::get('/dashboard', function () {
    return view('pages.dashboard', [
        'title' => 'Dashboard',
        'active' => ''
    ]);
})->middleware('auth');

Route::get('/about', function(){
    return view('pages.about', 
    [
        'title' => 'About',
        'active' => 'about',
        'nama' => "charles",
        'email' => "charles@gmail.com"
    ]);
});

Route::get('/posts', [PostController::class, 'showAll']);

// Route::get('/posts/{slug}', [PostController::class, 'showOne']);

// router model binding

Route::get('/posts/{post:slug}', [PostController::class, 'showOne']);



Route::get('/categories', [CategoryController::class, 'showCategories']);

Route::get('/categories/{category:slug}', [CategoryController::class, 'showCategory']);


// cara kedua kal gamau make router model binding
// Route::get('/categories/{slug}', function($slug){

//     $cat = Category::where('slug', $slug)->first();
//     return view('pages.category', [
//         'title' => $cat->name,
//         'posts' => $cat->posts,// ini function yang ada di model
//         'category' => $cat->name,
//     ]);
// });

Route::get('/author/{user:username}', [PostController::class, 'authorPost']);

Route::get('/login', function(){
    return view('pages.login',[
        'title' => 'login',
        'active' => ''
    ]);
})->middleware('guest');
Route::post('/login', [UserController::class, 'login']);

Route::get('/register', function(){
    return view('pages.register',[
        'title' => 'register',
        'active' => ''
    ]);
})->middleware('guest');

Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);