<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $tasks=[
                'North Campus',
                'Centennial Campus',
                    ];
                    
        return view('welcome',['tasks'=>$tasks, 
        
        'foo'=>'<script>alert("You are entering the home page!")</script>',
        
        'name'=>'ASR' ]);       
    }

    public function contact()
    {
        $name='Adharsh';
        $numbers=[1,2,30];
        
        return view('contact')->withName($name)->withNumbers($numbers);
    
        //return view('contact')->with( ['name'=>'Adharsh', 'numbers'=>[1,2,3] ]);// This is another way to define too
    }

    public function about()
    {
        return view('about');
    }

    
}
    