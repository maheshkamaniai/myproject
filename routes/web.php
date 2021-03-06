<?php

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

Route::get('/', 'IndexController@index');


Route::group(['prefix' => 'user'], function () {
    Route::get('/','UserController@index');
    Route::get('/add','UserController@add');
    Route::get('/add/{id}','UserController@add');
    Route::post('/save','UserController@save');
    Route::get('/delete/{id}','UserController@delete');
});

// Route::get('/',function(){
//     return view('auth/profile');
// });
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home','HomeController@index')->name('home');
Route::get('/profile/{id}','ProfileController@index');
Route::post('/addprofile','ProfileController@add');
//Route::get('/Project-List','ProjectListController@index')->name('home');
Route::get('/Taskboard','TaskboardController@index')->name('home');
Route::get('/Team-Member','TeamMemberController@index')->name('home');
Route::get('/Client','ClientController@index')->name('home');
Route::get('/UserRole','userRoleController@add')->name('userRole');

Route::group(['prefix' => 'Client'], function () {
    Route::get('/', 'ClientController@index');
    Route::get('/add', 'ClientController@add')->middleware('addClient');
    Route::get('/add/{id}', 'ClientController@add')->middleware('addClient');
    Route::post('/insert', 'ClientController@insert');
    Route::get('/addContactPerson/{id}', ['uses' => 'ClientController@addContactPerson']);
    Route::get('/addContactPerson/{id}/{subid}', ['uses' => 'ClientController@addContactPerson']);
    Route::post('/insertPerson', 'ClientController@insertPerson');
    Route::get('/destroy/{id}', 'ClientController@destroy');
    Route::get('/deletePerson/{id}', 'ClientController@deletePerson');
});

    Route::group(['prefix'=>'Project-List'],function(){
    Route::get('/ongoing','ProjectListController@index1')->middleware('viewProjectlist');
    Route::get('/summary/{id}','ProjectListController@summary');
    Route::get('/upcomming','ProjectListController@index2')->middleware('viewProjectlist');
    Route::get('/closed','ProjectListController@index3')->middleware('viewProjectlist');
    Route::get('/add','ProjectListController@add')->middleware('addProjectlist');
    Route::get('/add/{id}','ProjectListController@add')->middleware('addProjectlist');
    Route::post('/insert','ProjectListController@insert')->middleware('addProjectlist');
    Route::post('/updateTask','ProjectListController@updateTask')->middleware('addProjectlist');
    Route::get('/modulelist/{projectid}','ProjectListController@moduleList')->middleware('addProjectlist');
    Route::get('/modulelist/{projectid}/{id}','ProjectListController@moduleList')->middleware('addProjectlist');
    Route::post('/modulelist/insert','ProjectListController@insertModulelist')->middleware('addProjectlist');
    Route::get('/tasklist/{moduleid}','ProjectListController@tasklist')->middleware('addProjectlist');
    Route::get('/tasklist/{moduleid}/{id}','ProjectListController@tasklist')->middleware('addProjectlist');
    Route::post('/tasklist/insert','ProjectListController@insertTasklist')->middleware('addProjectlist');
    Route::get('/deleteProject/{id}', 'ProjectListController@deleteProject')->middleware('addProjectlist');
    Route::get('/deleteModule/{id}', 'ProjectListController@deleteModule')->middleware('addProjectlist');
    Route::get('/deleteTask/{id}', 'ProjectListController@deleteTask')->middleware('addProjectlist');
//task statush
    Route::get('/addtaskbordstatush/{id}','ProjectListController@addtaskbordstatush');

});
    Route::group(['prefix' => 'Taskboard'], function () {
    Route::get('/', 'TaskboardController@index');
    Route::get('/add', 'TaskboardController@add');
    Route::post('/create','TaskboardController@insert');
    Route::get('/addmodule/{id}','TaskboardController@addmodule');
    Route::get('/addsubtask/{id}','TaskboardController@addsubtask');
    Route::post('/addtask','TaskboardController@addtask');
    Route::post('/changeTask','TaskboardController@changeTask');
    Route::post('/addsubtaskname','TaskboardController@addsubtaskname');
    Route::post('/updateTask','TaskboardController@updateTask');
});

Route::group(['prefix' => 'Team-Member'], function () {
    Route::get('/', 'TeamMemberController@index');
    Route::get('/add', 'TeamMemberController@add');
    Route::post('/create','TeamMemberController@insert');
    Route::get('/addmodule/{id}','TeamMemberController@addmodule');
    Route::post('/addtask','TeamMemberController@addtask');
    
    Route::get('/deleteProject/{id}', 'TeamMemberController@delete');
    Route::get('/add/{id}','TeamMemberController@add');
});

Route::get('/projecttodo','projecttodoController@index')->name('projecttodo');


// {{ route('projecttodo') }}