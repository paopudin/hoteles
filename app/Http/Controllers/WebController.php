<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Response; 


class WebController extends Controller
{
       
    public function principal()
    {
        $view = View::make('web/inicioweb'); 
  

		       $sections = $view->renderSections(); // returns an associative array of 'content', 'head' and 'footer'

		      
		    

		    // just a regular request so return the whole view

		    return $view;
    }
}
