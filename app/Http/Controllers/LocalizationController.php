<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LocalizationController extends Controller {
   public function index(Request $request,$locale){
      //set’s application’s locale
      app()->setLocale($locale);
      
      //Gets the translated message and displays it
      // echo trans('lang.msg');

    $sessionStored =  $request->session()->put('user', 'aadhar');

	$request->session()->pull('key');

	$value = $request->session()->all();
		echo "<pre>";
		print_r($value);
		echo "</pre>";
   }
}
