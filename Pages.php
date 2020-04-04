<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
    function account(){
        return view('account');
    }

    function account2(){
        return view('account2');
    }
    
    function dashboard(){
        return view('dashboard');
    }
    function finaldeletion(){
        return view('finaldeletion');
    }
    function finalwindow(){
        return view('finalwindow');
    }
    function Homepage(){
        return view('Homepage');
    }
    function insertProcess(){
        return view('insertProcess');
    }
    function processpage(){
        return view('processpage');
    }
    function registration(){
        return view('registration');
    }
    function signout(){
        return view('signout');
    }
    function update(){
        return view('update');
    }
    function validation(){
        return view('validation');
    }
    
    
    
    
}
