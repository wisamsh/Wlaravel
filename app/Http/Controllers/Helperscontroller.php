<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Helperscontroller extends Controller
{

    public function MyRequests($name = null, $number = null)
    {
        return view('add', compact('name', 'number'));
    }
    
    public  function MySelect()
    {
        return view('select');
    }
    

    public  function MyDeleter($id= null)
    {
        return view('deleter', compact('id'));
    }

    public  function MyUpdater($id= null, $name = null , $number = null, $canceled = 0)
    {
        return view('update', compact('id', 'name', 'number', 'canceled'));
    }






}
