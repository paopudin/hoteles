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
        $view = View::make('layout/principalinicioweb'); 
    
		return $view;
    }
}
