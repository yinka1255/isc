<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use Session;
use Redirect;
use App\User;
use App\Candidate;
use App\Subject;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Mail;

class UsersController extends Controller{

    public function index(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function services(){
        return view('services');
    }

    public function membership(){
        return view('membership');
    }

    public function executive(){
        return view('executive');
    }
    public function economy(){
        return view('economy');
    }

    public function elite(){
        return view('elite');
    }


    public function logout(){

    	Auth::logout();
        
        return redirect('/');
    }
    
    
    
}
