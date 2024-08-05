<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

function getUsers(){
    return [
        1 =>['name' =>'Priyanshu', 'phone' =>'789456232', 'city' =>'ahmedabad'],
        2 =>['name' =>'Yash', 'phone' =>'1234567894', 'city' =>'goa'],
        3 =>['name' =>'Hmza', 'phone' =>'1478526984', 'city' =>'Mumbai'],
        4 =>['name' =>'Meet', 'phone' =>'1326549874', 'city' =>'Agra'],
    ];
}


//!Route for Query Builder
Route::get('/allusers',[UserController::class,'showUsers'])->name('home');
Route::get('/allusers/{id}',[UserController::class,'singleUser'])->name('view.singleUser');

Route::get('/addUser',[UserController::class,'addUser']);

Route::get('/updateUser',[UserController::class,'updateUser']);

Route::get('/deleteUser/{id}',[UserController::class,'deleteUser'])->name('delete.user');

Route::get('/', function () {
    return view('welcome');  
});

// Route::get('/users',function(){
//     $names = getUsers();
//     return view('users',[
//         'user' => $names,
//         'city' => 'ahmedabad'
//     ]);
// });

// single user detail route
Route::get('/user/{id}', function ($id) {
    $users = getUsers();
    if (!isset($users[$id])) {
        return redirect()->route('pagenotfound');
    }
    $user = $users[$id];

    return view('userdetails', ['user' => $user]);
})->name('view.user.details');


Route::get('/pagenotfound', function () {
    return view('pagenotfound');
})->name('pagenotfound');


Route::get('/about', function () {
    return view('about');  
});

Route::get('/post', function () {
    return view('post');  
});

// !Project page Route
Route::get('/projects',function(){
    return view('projects');
});

// !Controller Routes
Route::controller(PageController::class)->group(function(){

    Route::get('/','showHome')->name('chomePage');
    Route::get('/cpost','showPost')->name('cPostPage');
    Route::get('/user/{id}','showUser')->name('cUserPage');

});

// Route::get('/test', function () {
//     return view('test');  
// });
// Route::prefix('page')->group(function(){
//     Route::get('/about',function(){
//         return "<h1>About Page</h1>";
//     });
    
//     Route::get('/gallery',function(){
//         return "<h1>Gallery Page</h1>";
//     });
    
//     Route::get('/post/firstpost',function(){
//         return "<h1>First Post Page</h1>";
//     });
// });


// Route::get('page/postes',function(){
//     return view('post');
// })->name('mypost'); //!named routes


Route::fallback(function(){
    return view('pagenotfound');
});



    
// Route::redirect('/about','/test');