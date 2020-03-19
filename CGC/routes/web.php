<?php
use App\Http\Middleware\CheckRole;
use App\User;


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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('questions','QuestionsController');
Route::resource('answers','AnswerController',['except'=>['index','create','show']]);
Route::resource('comments','CommentsController', ['except' => ['index', 'create', 'show']]);
Route::resource('posts','PostController');
Route::resource ('admin/post','PostAdminController');



// Route::get('profile/{user}','PageController@profile')->name('profile');
Route::get('accueil','PageController@accueil')->name('accueil');
Route::get('apropos','PageController@apropos')->name('apropos');
Route::get('contact','PageController@contact')->name('contact');
Route::get('travaux','PageController@travaux')->name('travaux');
Route::get('produit','PageController@produit')->name('produit');
Route::get('all','PageController@allDatas')->middleware(CheckRole::class)->name('all');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => [CheckRole::class]], function() {
     Route::resource('admin/profile', 'AdminController');
   
     
  });
  Route::resource('user', 'UserController');
  Route::resource('profile', 'profileController');
  Route::get('profile2/{id}-{user}-{role}-{picture}', 'PageController@profile2')->name('profile2')->where('id','[0-9]')->where('user','[a-z0-9A-Z\-\ ]+')->where('role','[a-z0-9\- ]+')->where('picture','[a-z0-9\-_. ]+');

Route :: get ( 'image-upload' , 'ImageUploadController@imageUpload' )->name( 'image.upload' ); 
Route :: post ( 'image-upload' , 'ImageUploadController@imageUploadPost' )->name ( 'image.upload.post' ); 
Route :: get ( 'test' , 'PostController@test' )->name ( 'test' ); 
