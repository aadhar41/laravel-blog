<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AjaxController extends Controller {
   
   public function index() 	{
		$msg = "This is a simple message from AjaxController.";
		return response()->json(array('msg'=> $msg), 200);
   }

   public function getTitle() {
		$title = "<h2>Ajax view in Laravel.</h2>";
		return response()->json(array('title' => $title), 200);
   }

}
