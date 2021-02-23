<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PageController extends Controller
{
    public function index(Request $request)
    {
   
        return view('index');
    }
    public function create(Request $request)
    {
            $data = $request->fname;
            
            return view('action',compact('data'));
     
         
   
       
    }
    
    public function show(Request $request)
    {
   
        return view('action');
    }
    










}
