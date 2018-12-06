<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getHome(){
    	return view('home');
    }

     public function getAbout(){
    	return view('about');
    }

     public function getContact(){
    	return view('contact');
    }

     public function getOurservice(){
    	return view('ourservice');
    }

     public function getInfrastructure(){
    	return view('Infrastructure');
    }

     public function getHotel(){
    	return view('hotel');
    }

     public function getBangladesh(){
    	return view('Bangladesh');
    }

     public function getTurism(){
    	return view('TurismX');
    }
}
