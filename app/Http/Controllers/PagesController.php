<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;


class PagesController extends Controller
{
    
    
    public function home()
    {
        return view('welcome');
    }
    
    
    public function about()
    {      
        return view('about')->with([
        'tasks' => ['Welcome to Leeds Beckett Basketball team website',
                    'Save fixtures related to you',
                    'Add team lists to fixtures',
                    'Note down any statistics you want to remember',
                    'Add scores to fixtures after they have been played']
        ]);
    }


    public function contact() 
    {
        return view ('contact'); 
    }



}

