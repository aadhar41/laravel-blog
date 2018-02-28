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


// First Route method – Root URL will match this method
Route::get('/', function () {
   return view('welcome');
});

// Second Route method – Root URL with ID will match this method
Route::get('ID/{id}',function($id){
   echo 'ID: '.$id;
});

//Third Route method – Root URL with or without name will match this method
Route::get('/user/{name?}',function($name = 'Aadhar'){
   echo "Name: ". $name;
});


Route::get('role',[
   'middleware' => 'Role: Editor',
   'uses' => 'TestController@index',
]);


Route::get('terminate',[
   'middleware' => 'terminate',
   'uses' => 'ABCController@index',
]);


Route::get('/usercontroller/path',[
   'middleware' => 'First',
   'uses' => 'UserController@showPath'
]);


// Route::resource('my','MyController');

// Route::controller('test','ImplicitController');

// class MyClass{
//    public $foo = 'bar';
// }
// Route::get('/myclass','ImplicitController@index');

Route::get('/foo/bar','UriController@index');



Route::get('/register',function(){
   return view('register');
});

Route::post('/user/register',array('uses'=>'UserRegistration@postRegister'));



Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');


Route::get('/header',function(){
   return response("Hello", 200)->header('Content-Type', 'text/html');
});

Route::get('/cookie',function(){
   return response("Hello cookie", 200)->header('Content-Type', 'text/html')
      ->withcookie('name','Aadhar');
});


// JSON Response
Route::get('json',function(){
   return response()->json(['name' => 'Aadhar', 'state' => 'Rajasthan']);
});


// Route::get('/test', 'HomeController@index');

// Route::get('/test', function(){
//    return view('test',['name'=>'Aadhar gaur']);
// });

Route::get('/test', function(){
   return view('test');
});
Route::get('/test2', function(){
   return view('test2');
});


Route::get('blade', function () {
   return view('page',array('name' => 'Tim Paine'));
});


Route::get('/testname', ['as'=>'testing',function(){
   return view('test2');
}]);

Route::get('redirect',function(){
   return redirect()->route('testing');
});


Route::get('rr','RedirectController@index');

Route::get('/redirectcontroller',function(){
   return redirect()->action('RedirectController@index');
});


// Crud insert route
Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert');
Route::get('view-records','StudViewController@index');

Route::get('edit-records','StudUpdateController@index');
Route::get('edit/{id}','StudUpdateController@show');
Route::post('edit/{id}','StudUpdateController@edit');

Route::get('delete-records','StudDeleteController@index');
Route::get('delete/{id}','StudDeleteController@destroy');

Route::get('/form',function(){
   return view('form');
});



Route::get('localization/{locale}','LocalizationController@index');

Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');


// Login view
Route::get('/validation','ValidationController@showform');
Route::post('/validation','ValidationController@validateform');


// File Upload
Route::get('/uploadfile','UploadFileController@index');
Route::post('/uploadfile','UploadFileController@showUploadFile');


// Email 

Route::get('sendbasicemail','MailController@basic_email');
Route::get('sendhtmlemail','MailController@html_email');
Route::get('sendattachmentemail','MailController@attachment_email');


// Ajax
Route::get('ajax',function(){
   return view('message');
});

Route::post('/getmsg','AjaxController@index');
Route::post('/gettitle','AjaxController@getTitle');


// Error Handling
Route::get('/error404',function(){
   abort(404);
});

Route::get('/error500',function(){
   abort(500);
});