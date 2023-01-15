<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EteController extends Controller
{
    
    public function ete()
    {
        return view ('admin.ete');
    }
}
